<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApplicantRegistration extends CI_Controller {

	public function index()
	{

		$this->firephp->log('my string message' );
		//$this->output->enable_profiler(TRUE);ke


		// Theme folder located at /root/views/
		// change theme at config/constants 
		// check actual theme for possible values
		// [page_title, page_styles, navigation, user_profile, menu_aside, content_title, content_file, footer, page_scripts]

		//$this->data['page_title'] = 'Dashboard';
		//$this->data['menu_aside'] = 'menu_aside';
		$this->data['content_file'] = 'content_file_applicant_registration';
		$this->data['content_title'] = 'Register as Applicant';
		$this->data['page_scripts'] = 'js_register_applicant';
		$this->data['page_styles'] = 'css_register_applicant';

		$this->load->view(THEME.'/index', $this->data);   


	}
}
