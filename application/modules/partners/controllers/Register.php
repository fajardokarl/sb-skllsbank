<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{

        $this->firephp->log('my string message' );
		//$this->output->enable_profiler(TRUE);

        $this->load->helper(array('countries','form'));
        //$country_names = get_country_names();
        //$this->firephp->log($country_names);

		// Theme folder located at /root/views/
		// change theme at config/constants 
		// check actual theme for possible values
		// [page_title, page_styles, navigation, user_profile, menu_aside, content_title, content_file, footer, page_scripts]

		$this->data['page_title'] = 'Register Company';
		//$this->data['menu_aside'] = 'menu_aside';
		$this->data['content_file'] = 'content_register';
		$this->data['content_title'] = 'Register Company';
		$this->data['page_scripts'] = 'js_register_partner';
        $this->data['page_styles'] = 'css_register_partner';
        
        $this->data['country_list'] = get_country_names();

		$this->load->view(THEME.'/index', $this->data);   

	}
}
