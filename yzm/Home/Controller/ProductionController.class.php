<?php 
namespace Home\Controller;
use Think\Controller;

class ProductionController extends Controller{
	public function index(){
		// 幻灯片
		$this->carousels = M('carousel')->where('is_display=1')->order('order_num')->limit('1, 1')->select();

		// 作品展示
		$model = D('ProductionView');
		$this->q_type = $model->distinct(true)->getField('type', true);
		if($_GET[q_t]==''){
			$this->production = $model->select();
		}else{
			$this->production = $model->where('type='.$_GET[q_t])->select();
		}

		$this->display();	
	}

	public function info(){
		$this->rows = explode(',', substr(M('production')->where('student_id='.$_GET[id])->getField('imgs'), 0, -1));
		$this->display();	
	}

}
 ?>
