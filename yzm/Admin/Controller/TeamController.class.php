<?php 
namespace Admin\Controller;
use Think\Controller;

// class IndexController extends Controller{
class TeamController extends AllowController{
	public function index(){
		$team = M('team');
		$count = $team->count();
		$this->rows = $team->page($_GET[p].',15')->select();
		$page = new \Think\Page($count, 15);
		$this->pagination = $page->show();
		$this->display();	
	}

	public function add(){
		$team = M('team');
		if(IS_POST){
			$_POST[create_time] = time();
			$_POST[update_time] = time();
			if($team->add($_POST)){
				$this->success('师资新增成功', U('index'));
			}else{
				$this->error($team->getError(), U('add'));
				exit();
			}
		}else{
			$this->display();
		}
	}

	public function delete($id){
		$team = M('team');
		$team->delete($id);
		$this->success('删除成功', U('index'));
	}

	public function edit($id=0){
	}
}
 ?>
