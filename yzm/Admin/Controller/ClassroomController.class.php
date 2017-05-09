<?php 
namespace Admin\Controller;
use Think\Controller;

// class IndexController extends Controller{
class ClassroomController extends AllowController{
	public function index(){
		$classroom = M('classroom');
		$count = $classroom->count();
		$this->rows = $classroom->page($_GET[p].',15')->select();
		$page = new \Think\Page($count, 15);
		$this->pagination = $page->show();
		$this->display();	
	}

	public function add(){
		$classroom = M('classroom');
		if(IS_POST){
			$_POST[create_time] = time();
			$_POST[update_time] = time();
			if($classroom->add($_POST)){
				$this->success('实训环境新增成功', U('index'));
			}else{
				$this->error($classroom->getError(), U('add'));
				exit();
			}
		}else{
			$this->display();
		}
	}

	public function delete($id){
		$classroom = M('classroom');
		$classroom->delete($id);
		$this->success('删除成功', U('index'));
	}

	public function edit($id=0){
	}
}
 ?>
