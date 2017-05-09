<?php 
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
	public function ajax_verify(){
		$verify = new \Think\Verify();
		echo $verify->entry();
	}

	public function verify(){
		$verify = new \Think\Verify();
		$verify->entry();
	}

	public function check_verify($code, $id=''){
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}

	public function index(){
		$this->display();	
	}

	public function login(){
		$user = M('user');
		if(IS_POST){
			if(!$this->check_verify(I("post.fcode"))){
				$this->error("验证码错误！", U("index"));
				exit;
			}
			$_POST[password] = md5($_POST[password]);
			if($user->where($_POST)->find()){
				session('user_id', $user->id);
				session('username', $user->username);
				$this->success('登录成功！', U('Index/welcome'));
			}else{
				$this->error('非法用户！');
			}
		}else{
			$this->error('请登录！', U('index'));
		}
	}

	public function logout(){
		session(null);
		session('[destroy]');
		cookie(session_name(), null);
		$this->success('用户已退出登录！', U('index'));
	}
 }

 ?>
