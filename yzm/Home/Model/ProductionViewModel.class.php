<?php 
namespace Home\Model;
use Think\Model\ViewModel;

class ProductionViewModel extends ViewModel{
	public $viewFields = array(
		'Production' => array('id', 'name', 'imgs', 'type', 'student_id'),
		'Student' => array('id'=>'sid', 'name'=>'student_name','img'=>'student_img', '_on'=>'Production.student_id=Student.id'),
		'CoursePlan' => array('name'=>'course_name', '_on'=>'Student.coursePlan_id=CoursePlan.id'),
	);
}
?>
