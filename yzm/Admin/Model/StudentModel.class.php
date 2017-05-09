<?php 
namespace Admin\Model;
use Think\Model\RelationModel;

class StudentModel extends RelationModel{
	protected $_auto = array(
		// array('password', 'md5', 3, 'function'),
		array('create_time', 'time', 1, 'function'),
		array('update_time', 'time', 3, 'function'),
	);

	protected $_validate = array(
		// array('fcode', 'check_verify', '验证码有误！', 0, 'callback', 3),
		// array('username', 'require', '用户名必须！'),
	);

	// public function check_verify($fcode){
	// 	$verify = new \Think\Verify();
	// 	return $verify->check($fcode);
	// }

	// protected $patchValidate = true;

	protected $_link = array(
		'coursePlan' => array(
			'mapping_type' => self::BELONGS_TO,
			'mapping_field' => 'name',
			'as_fields' => 'name:course_name',
		)
	);
}
?>
