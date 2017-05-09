<?php 
namespace Home\Controller;
use Think\Controller;

class QqController extends Controller{
	public function index(){
		// 幻灯片
		$this->carousels = M('carousel')->where('is_display=1')->order('order_num')->limit('2, 1')->select();

		// 线下实训
		$this->rows = M('qq')->select();

		$this->display();	
	}

}
 ?>
