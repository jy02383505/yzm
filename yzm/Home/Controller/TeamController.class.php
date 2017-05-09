<?php 
namespace Home\Controller;
use Think\Controller;

class TeamController extends Controller{
	public function index(){
		// 幻灯片
		$this->carousels = M('carousel')->where('is_display=1')->order('order_num')->limit('5, 1')->select();

		// 师资团队
		$this->teams = M('team')->select();

        // 实训环境
        $this->classrooms = M('classroom')->select();

		$this->display();	
	}

}
 ?>
