<?php 
namespace Admin\Controller;
use Think\Controller;

// class IndexController extends Controller{
class CarouselController extends AllowController{
	public function index(){
		$carousel = M('carousel');
		$count = $carousel->count();
		$this->rows = $carousel->page($_GET[p].',15')->select();
		$page = new \Think\Page($count, 15);
		$this->pagination = $page->show();
		$this->display();	
	}

	public function add(){
		$carousel = M('carousel');
		if(IS_POST){
			$_POST[create_time] = time();
			$_POST[update_time] = time();
			if($carousel->add($_POST)){
				$this->success('幻灯片添加成功', U('index'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->display();
		}
	}

	public function delete($id){
		$category = M('carousel');
		$category->delete($id);
		$this->success('删除成功', U('index'));
	}

	public function edit(){
		
	}

}
 ?>
