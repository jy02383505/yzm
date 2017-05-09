<?php 
namespace Admin\Controller;
use Think\Controller;

class CategoryController extends AllowController{
	public function index(){
		$category = M('category');
		$count = $category->count();
		$this->rows = $category->page($_GET[p].',2')->select();
		$page = new \Think\Page($count, 2);
		$this->pagination = $page->show();
		$this->display();	
	}

	public function add(){
		$category = M('category');
		if(IS_POST){
			if($category->create()){
				$category->add();
				$this->success('用户添加成功', U('index'));
			}else{
				$this->error($category->getError(), U('add'));
				exit();
			}
		}else{
			$this->display();
		}
	}

	public function delete($id){
		$category = M('category');
		if(IS_POST){
			$category->delete($id);
			$this->success('删除成功', U('index'));
		}
	}

	public function edit(){
		
	}

	public function files(){
		$upload = new \Think\Upload();
		$info = $upload->uploadOne($_FILES['img']);
		if(!$info){
			$this->error($upload->getError());
		}else{
			echo $info['savepath'].$info['savename'];
		}
	}

	public function upload(){
		if(!empty($_FILES)){
			$upload = new \Think\Upload();
			$upload->maxSize = 3145782;
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg');
			$upload->savePath = './';
			$images = $upload->upload();
			if($images){
				$info = $images['Filedata']['savepath'].$images['Filedata']['savename'];
				echo $info;
			}else{
				$this-error($upload->getError());
			}
		}
	}
}
 ?>
