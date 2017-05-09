<?php 
namespace Home\Controller;
use Think\Controller;

class DownloadController extends Controller{
	public function index(){
		// 幻灯片
		$this->carousels = M('carousel')->where('is_display=1')->order('order_num')->limit('2, 1')->select();

		// 线下实训
		$data = M('download')->order('date desc')->select();
        foreach ($data as $key => $value) {
            $arr[$value[date]][date] = $value[date];
            $arr[$value[date]][next][] = $value;
        }
        $this->rows = $arr;

		$this->display();	
	}

}
 ?>
