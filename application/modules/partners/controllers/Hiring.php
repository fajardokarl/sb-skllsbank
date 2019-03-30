<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hiring extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('hiring_model');
		$this->load->helper(array('countries','form'));
	}

	public function index()
	{
		$this->firephp->log('my string message' );
		//$this->output->enable_profiler(TRUE);

		// Theme folder located at /root/views/
		// change theme at config/constants 
		// check actual theme for possible values
		// [page_title, page_styles, navigation, user_profile, menu_aside, content_title, content_file, footer, page_scripts]

		$this->data['page_title'] = 'Hiring Request List';
		//$this->data['menu_aside'] = 'menu_aside';
		$this->data['content_file'] = 'content_file_hiring_list';
		$this->data['content_title'] = 'Hiring Request List';
		$this->data['page_scripts'] = 'js_hiring_list';
		//$this->data['page_styles'] = 'css_applicant_waitlist';
		$this->data['hirings'] = $this->hiring_model->get_hirings("USE SESSION DATA PARTNER ID");
		//print_r($this->data['hirings']);
		$this->load->view(THEME.'/index', $this->data);
	}

}
