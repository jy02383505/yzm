<?php 
namespace Admin\Controller;
use Think\Controller;

// class IndexController extends Controller{
class CoursePlanController extends AllowController{
	public function index(){
		$coursePlan = M('coursePlan');
		$count = $coursePlan->count();
		$this->rows = $coursePlan->page($_GET[p]?:'1'.',15')->order('id desc')->select();
		$page = new \Think\Page($count, 15);
		$this->pagination = $page->show();
		$this->display();	
	}

	public function add(){
		$coursePlan = M('coursePlan');
		if(IS_POST){
			$_POST[create_time] = time();
			$_POST[update_time] = time();
			if($coursePlan->add($_POST)){
				$this->success('开班历程添加成功', U('index'));
			}else{
				$this->error($coursePlan->getError(), U('add'));
				exit();
			}
		}else{
			$this->display();
		}
	}

	public function delete($id){
		$coursePlan = M('coursePlan');
		$coursePlan->delete($id);
		$this->success('删除成功', U('index'));
	}

	public function edit(){
		
	}
}
 ?>
