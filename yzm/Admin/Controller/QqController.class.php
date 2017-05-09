<?php 
namespace Admin\Controller;
use Think\Controller;

// class IndexController extends Controller{
class QqController extends AllowController{
	public function index(){
		$qq = M('qq');
		$count = $qq->count();
		$this->rows = $qq->page($_GET[p].',15')->select();
		$page = new \Think\Page($count, 15);
		$this->pagination = $page->show();
		$this->display();	
	}

	public function add(){
		$qq = M('qq');
		if(IS_POST){
			$_POST[create_time] = time();
			$_POST[update_time] = time();
			if($qq->add($_POST)){
				$this->success('新增技术交流群成功', U('index'));
			}else{
				$this->error($qq->getError(), U('add'));
				exit();
			}
		}else{
			$this->display();
		}
	}

	public function delete($id){
		$qq = M('qq');
		$qq->delete($id);
		$this->success('删除成功', U('index'));
	}

	public function edit($id=0){
	}
}
 ?>
