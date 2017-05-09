<?php 
namespace Home\Controller;
use Think\Controller;

class EmploymentController extends Controller{
	public function index(){
		// 幻灯片
		$this->carousels = M('carousel')->where('is_display=1')->order('order_num')->limit('3, 1')->select();

		// 就业明星
		$this->students = M('student')->where('img != ""')->order('order_num')->limit(8)->select();
		$this->student_all = D('student')->relation(true)->select();
		// foreach ($data as $key => $value) {
		// 	if($value[img] != ''){
		// 		$arr[$value[order_num]][] = $value;
		// 	}
		// }

		$this->display();	
	}

}
 ?>
