<?php 
namespace Admin\Controller;
use Think\Controller;

// class IndexController extends Controller{
class OurHistoryController extends AllowController{
	public function index(){
		$ourHistory = M('ourHistory');
		$count = $ourHistory->count();
		$this->rows = $ourHistory->page($_GET[p].',15')->select();
		$page = new \Think\Page($count, 15);
		$this->pagination = $page->show();
		$this->display();	
	}

	public function add(){
		$ourHistory = M('ourHistory');
		if(IS_POST){
			$_POST[create_time] = time();
			$_POST[update_time] = time();
			$_POST[author] = $_SESSION['username'];
			if($ourHistory->add($_POST)){
				$this->success('新闻资讯添加成功', U('index'));
			}else{
				$this->error($ourHistory->getError(), U('add'));
				exit();
			}
		}else{
			$this->display();
		}
	}

	public function delete($id){
		$ourHistory = M('ourHistory');
		$ourHistory->delete($id);
		$this->success('删除成功', U('index'));
	}

	public function edit(){
		$this->display();
	}
}
 ?>
