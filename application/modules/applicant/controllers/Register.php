<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{

		$this->firephp->log('my string message' );
		//$this->output->enable_profiler(TRUE);ke
		$this->load->helper(array('countries','form'));


		// Theme folder located at /root/views/
		// change theme at config/constants 
		// check actual theme for possible values
		// [page_title, page_styles, navigation, user_profile, menu_aside, content_title, content_file, footer, page_scripts]

		$this->data['page_title'] = 'Dashboard';
		//$this->data['menu_aside'] = 'menu_aside';
		$this->data['navigation']   = 'register/navigation';
		$this->data['content_file'] = 'register/content_file_applicant_registration';
		$this->data['content_title'] = 'Register as Applicant';
		$this->data['page_scripts'] = 'register/js_register_applicant';
		$this->data['page_styles'] = 'register/css_register_applicant';
		$this->data['country_list'] = get_country_names();

		$this->load->view(THEME.'/index', $this->data);   


	}
}
