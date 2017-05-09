<?php 
namespace Admin\Controller;
use Think\Controller;

// class IndexController extends Controller{
class DownloadController extends AllowController{
	public function index(){
		$download = M('download');
		$count = $download->count();
		$this->rows = $download->page($_GET[p].',15')->select();
		$page = new \Think\Page($count, 15);
		$this->pagination = $page->show();
		$this->display();	
	}

	public function add(){
		$download = M('download');
		if(IS_POST){
			$_POST[create_time] = time();
			$_POST[update_time] = time();
			if($download->add($_POST)){
				$this->success('新增下载资源成功', U('index'));
			}else{
				$this->error($download->getError(), U('add'));
				exit();
			}
		}else{
			$this->display();
		}
	}

	public function delete($id){
		$download = M('download');
		$download->delete($id);
		$this->success('删除成功', U('index'));
	}

	public function edit($id=0){
	}
}
 ?>
