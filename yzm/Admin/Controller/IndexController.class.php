<?php 
namespace Admin\Controller;
use Think\Controller;

// class IndexController extends Controller{
class IndexController extends AllowController{
	public function welcome(){
		$this->display();
	}

	public function index(){
		$user = M('user');
		$count = $user->count();
		$this->rows = $user->page($_GET[p].',2')->select();
		$page = new \Think\Page($count, 2);
		$this->pagination = $page->show();
		$this->display();
	}

	public function add(){
		$user = D('user');
		if(IS_POST){
			if($user->create()){
				$user->add();
				$this->success('用户添加成功', U('index'));
			}else{
				$this->error($user->getError(), U('add'));
				exit();
			}
		}else{
			$this->display();
		}
	}

	public function delete($id){
		$user = D('user');
		if(IS_POST){
			$user->delete($id);
			$this->success('删除成功', U('index'));
		}
	}

	public function edit(){
		
	}
}
 ?>
