<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		$this->firephp->log('my string message' );
		//$this->output->enable_profiler(TRUE);ke
		//$this->load->helper(array('countries','form'));


		// Theme folder located at /root/views/
		// change theme at config/constants 
		// check actual theme for possible values
		// [page_title, page_styles, navigation, user_profile, menu_aside, content_title, content_file, footer, page_scripts]

		$this->data['page_title'] = 'Dashboard';
		//$this->data['menu_aside'] = 'menu_aside';
		//$this->data['content_file'] = 'content_file_applicant_registration';
		//$this->data['content_title'] = 'Register as Applicant';
		$this->data['page_scripts'] = 'js_login';
		//$this->data['page_styles'] = 'css_register_applicant';
		//$this->data['country_list'] = get_country_names();

		$this->load->view(THEME.'/login', $this->data);   

	}

	public function signin(){

		$this->firephp->log('inside signin');
		$this->load->model('login_model',"login");  

		$username = $this->input->post('username')?:'';
		$password = $this->input->post('password')?:'';

		//$username = 'asd@sdfg.com';
		//$password = '123';

		$form_user = array (
			'username' => $username
		);
		$user = $this->login->get_user($form_user);
		if (isset($user)){
			if ($user['status_id'] == 0 and $user['deleted'] == 1) {
				echo json_encode(array('response'=>-1));
				return;
			}
			$this->firephp->log('before verify');
			if (password_verify($password, $user['password'])) {

				$this->firephp->log('inside verify');

				//save user details to session for use later
				$user_role = $this->login->get_user_role($user['idx']);
				$this->session->set_userdata('user',$user);
				$this->session->set_userdata('user_role',$user_role);
				
				//redirect user to proper controller
				$url = base_url($user_role['route']);
				echo json_encode(array('response'=>1,'redirect_url'=>$url));
				return;
			}
			$this->firephp->log('after verify');
		}
		echo json_encode(array('response'=>0));
		return ;
	}

	public function logout(){
	
		$this->session->sess_destroy();
		$this->firephp->log('user logged out');
		redirect(base_url('login'));

	}


}
