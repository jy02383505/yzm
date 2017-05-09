<?php 
namespace Admin\Controller;
use Think\Controller;

// class IndexController extends Controller{
class CourseController extends AllowController{
	public function index(){
		$course = M('course');
		if($_GET[id]){
			$count = $course->where('pid='.$_GET[id])->count();
			$this->rows = $course->where('pid='.$_GET[id])->page($_GET[p].',15')->select();
		}else{
			$count = $course->count();
			$this->rows = $course->page($_GET[p].',15')->select();
		}
		$page = new \Think\Page($count, 15);
		$this->pagination = $page->show();
		$this->display();	
	}

	public function add(){
		$course = M('course');
		if(IS_POST){
			$_POST[create_time] = time();
			$_POST[update_time] = time();
			$_POST[pid] = $_GET[id]?:"0";
			$_POST[path] = $_GET[path]?:"0,";
			if($course->add($_POST)){
				$this->success('课程添加成功', U('index'));
			}else{
				$this->error($course->getError(), U('add'));
				exit();
			}
		}else{
			$this->display();
		}
	}

	public function delete($id){
		$course = M('course');
		$course->delete($id);
		$this->success('删除成功', U('index'));
	}

	public function edit($id=0){
		$course = M('course')->find($id);
		$course->save();
	}
}
 ?>
