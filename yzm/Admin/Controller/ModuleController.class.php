<?php 
namespace Admin\Controller;
use Think\Controller;

class ModuleController extends AllowController{
	public function index(){
		$this->modules_index = M('module')->select();
		$this->display('Public/templates/admin/base.html');
	}

	public function add(){
		$module = M('module');
		if(IS_POST){
			$_POST[create_time] = time();
			$_POST[update_time] = time();
			if($module->add($_POST)){
				$this->success('添加成功', U('index'));
				// echo "<script>alert('添加成功');location=history.go(-2);location=reload();</script>";
			}else{
				$this->error($module->getError(), U('add'));
				exit();
			}
		}else{
			$this->display();
		}
	}

	public function delete($id){
		$module = M('module');
		$module->delete($id);
		$this->success('删除成功', U('index'));
	}

	public function edit($id){
		$module = M('module');
		if(IS_POST){
			if($module->create()){
				$_POST[update_time] = time();
				$module->where("id=$id")->save($_POST);
				$this->success('数据修改成功', U('index'));
			}else{
				$this->error('数据输入有误');
			}
		}else{
			$this->row = $module->find($id);
			$this->display();
		}
	}
}
 ?>
