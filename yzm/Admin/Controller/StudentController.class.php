<?php 
namespace Admin\Controller;
use Think\Controller;

// class IndexController extends Controller{
class StudentController extends AllowController{
	public function index(){
		$student = D('student');
		$count = $student->count();
		$this->rows = $student->relation(true)->page($_GET[p].',15')->select();
		$page = new \Think\Page($count, 15);
		$this->pagination = $page->show();
		$this->display();	
	}

	public function add(){
		$student = M('student');
		if(IS_POST){
			$_POST[create_time] = time();
			$_POST[update_time] = time();
			if($student->add($_POST)){
				$this->success('学生新增成功', U('index'));
			}else{
				$this->error($student->getError(), U('add'));
				exit();
			}
		}else{
			$this->coursePlan = M('coursePlan')->select();
			$this->display();
		}
	}

	public function delete($id){
		$student = M('student');
		$student->delete($id);
		$this->success('删除成功', U('index'));
	}

	public function edit($id=0){
	}
}
 ?>
