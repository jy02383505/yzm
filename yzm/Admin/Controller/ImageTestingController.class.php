<?php 
namespace Admin\Controller;
use Think\Controller;

// class IndexController extends Controller{
class ImageTestingController extends AllowController{
	public function index(){
		$ImageTesting = M('ImageTesting');
		$count = $ImageTesting->count();
		$this->rows = $ImageTesting->page($_GET[p].',15')->select();
		$page = new \Think\Page($count, 15);
		$this->pagination = $page->show();
		$this->display();	
	}

	public function add(){
		$ImageTesting = M('ImageTesting');
		if(IS_POST){
			$_POST[create_time] = time();
			$_POST[update_time] = time();
			if($ImageTesting->add($_POST)){
				$this->success('图片新增成功', U('index'));
			}else{
				$this->error($ImageTesting->getError(), U('add'));
				exit();
			}
		}else{
			$this->coursePlan = M('coursePlan')->select();
			$this->display();
		}
	}

	public function delete($id){
		$ImageTesting = M('ImageTesting');
		$ImageTesting->delete($id);
		$this->success('删除成功', U('index'));
	}

	public function edit($id=0){
	}
}
 ?>
