<?php 
namespace Home\Controller;
use Think\Controller;

class CoursePlanController extends Controller{
	public function index(){
		// 幻灯片
		$this->carousels = M('carousel')->where('is_display=1')->order('order_num')->limit('3, 1')->select();

		// 开班历程
		$this->coursePlans = M('course_plan')->order('course_date desc')->select();
		foreach ($this->coursePlans as $key => $value) {
			if($value[status] == 0 && strtotime($value[course_date]) < time()){
				$value[status] = 1;
				M('course_plan')->where('id='.$value[id])->save($value);
			}
		}

		$this->display();	
	}

}
 ?>
