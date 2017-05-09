<?php 
namespace Home\Controller;
use Think\Controller;

class CourseController extends Controller{
	public function index(){
		// 幻灯片
		$this->carousels = M('carousel')->where('is_display=1')->order('order_num')->select();

		// 线下实训
		$data = M('course')->where('type=0 or type=2')->select();
		$this->rows = $this->getSerialize($data);

		$this->display();	
	}

    public function getSerialize($data, $pid=0){
        foreach ($data as $key => $value) {
            if($value[pid]==$pid){
                $arr[$key] = $value;
                $arr[$key][next] = $this->getSerialize($data, $value[id]);
            }
        }
        return $arr;
    }

}
 ?>
