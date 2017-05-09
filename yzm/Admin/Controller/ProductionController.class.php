<?php 
namespace Admin\Controller;
use Think\Controller;

// class IndexController extends Controller{
class ProductionController extends AllowController{
	public function index(){
		$production = D('production');
		$count = $production->count();
		$this->rows = $production->relation(true)->page($_GET[p].',15')->select();
		$page = new \Think\Page($count, 15);
		$this->pagination = $page->show();
		$this->display();	
	}

	public function add(){
		$production = M('production');
		if(IS_POST){
			$_POST[create_time] = time();
			$_POST[update_time] = time();
			if($production->add($_POST)){
				$this->success('新增学员作品成功', U('index'));
			}else{
				$this->error($production->getError(), U('add'));
				exit();
			}
		}else{
			$this->students = M('student')->select();
			$this->display();
		}
	}

	public function delete($id){
		$production = M('production');
		$production->delete($id);
		$this->success('删除成功', U('index'));
	}

	public function edit($id=0){
	}
}
 ?>
