<?php 
namespace Admin\Controller;
use Think\Controller;

class RuleController extends AllowController{
	public function index(){
		$sql = "select auth_rule.*,module.name module_name from auth_rule,module where auth_rule.module_id=module.id";
		$this->rules = M()->query($sql);
		$this->display();
	}

	public function add(){
		if(IS_POST){
			$rule = M('auth_rule');
			if($rule->add($_POST)){
				$this->success('添加成功', U('Rule/index'));
				// echo "<script>alert('添加成功');location=history.go(-2);location=reload();</script>";
			}else{
				$this->error($rule->getError(), U('add'));
				exit();
			}
		}else{
			$this->modules = M('module')->select();
			$this->display();
		}
	}

	public function delete($id){
		$module = M('module');
		$module->delete($id);
		$this->success('删除成功', U('index'));
	}

	public function edit(){
		
	}
}
 ?>
