<?php 
namespace Admin\Controller;
use Think\Controller;
use Think\Image;

class AllowController extends Controller{
	function _initialize(){
		$data = M('module')->where('is_display=1')->select();
		$rule = M('auth_rule');
		// $rule = M('auth_rule')->select();
		// foreach ($data as $key => &$value) {
		// 	foreach ($rule as $k => $v) {
		// 		if ($v[module_id]==$value[id]) {
		// 			$value[zi][]=$v;
		// 		}
		// 	}
		// }
		// $sql = "select module.name module_name, auth_rule.* from module,auth_rule where module.id=auth_rule.module_id";
		foreach ($data as $key => &$value) {
			// $arr[$value[module_id]][] = $value;
			$value['rules'] = $rule->where('module_id='.$value[id])->select();
		}

		$this->module_rules = $data;
		$this->fetch("Public/templates/admin/base.html");

		// 验证用户登录与否
		if(!session('user_id')){
			$this->error('请登录!', U('Login/index'));
			exit;
		}
	}
	
    /**
     * 基于ThinkPHP上传文件的处理
     * 结合lym.js当中的initUploadify函数
     * pType表示上传上来的文件属于什么类型，不同类型的文件存储路径有所区分
     * @return $info [string] [返回上传文件的存储路径]
     */
    public function upload(){
        if(!empty($_FILES)){
            $upload = new \Think\Upload();
            $upload->maxSize = 30*1024*1024;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            switch($_POST[pType]){
                case 'water':
                    $folderName = 'water/';
                    break;
                default:
                    $folderName = 'carousel/';
                    break;
            }
            $upload->savePath = $folderName;
            $images = $upload->upload();
            if($images){
                $info = $images['Filedata']['savepath'].$images['Filedata']['savename'];
                die($info);
            }else{
                die($upload->getError());
            }
        }
    }

}
?>
