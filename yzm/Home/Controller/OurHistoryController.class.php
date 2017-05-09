<?php 
namespace Home\Controller;
use Think\Controller;

class OurHistoryController extends Controller{
	public function index(){
		// 幻灯片
		$this->carousels = M('carousel')->where('is_display=1')->order('order_num')->limit('1, 1')->select();

        // 新闻资讯
        $news = M('our_history');
		$count = $news->count();
		$this->news = $news->page($_GET[p]?:'1'.',12')->select();
		$page = new \Think\Page($count, 12);
		$this->pagination = $page->show();

		$this->display();	
	}

	public function info(){
		$this->row = M('our_history')->find($_GET[id]);
		$this->display();
	}

}
 ?>
