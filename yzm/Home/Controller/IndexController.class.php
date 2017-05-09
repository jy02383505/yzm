<?php 
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller{
	public function index(){
		// 幻灯片
		$this->carousels = M('carousel')->where('is_display=1')->order('order_num desc')->select();

		// 开班历程
		$this->coursePlans = M('course_plan')->limit(6)->order('course_date desc')->select();
		foreach ($this->coursePlans as $key => $value) {
			if($value[status] == 0 && strtotime($value[course_date]) < time()){
				$value[status] = 1;
				M('course_plan')->where('id='.$value[id])->save($value);
			}
		}

		// 新闻资讯
		$this->news = M('our_history')->where('id!=2')->order('news_date desc')->limit(6)->select();

		// 线下实训
		$this->courses = M('course')->where('type=0')->limit(6)->select();

		// 线上教育
		$this->internets = M('course')->where('type=1')->limit(6)->select();

		// 师资团队
		$this->teams = M('team')->limit(3)->select();

		// 就业明星
		$this->students = D('student')->where('img != ""')->relation(true)->limit(8)->order('order_num')->select();

		// 教学环境
		$this->classrooms = M('classroom')->limit(6)->select();
		$this->display();	
	}

}
 ?>
