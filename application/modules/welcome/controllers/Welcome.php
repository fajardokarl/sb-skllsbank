<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('person_model',"person"); 

		$this->firephp->log('my string message' );
		//$this->output->enable_profiler(TRUE);
		$user = $this->session->userdata('user');
		$person = $this->person->get_person_by_user_id($user['idx']); 
		$this->data['person'] = $person;
		$this->data['user_profile']   = 'applicant_user_profile';
		$this->data['user'] = $user;
		// Theme folder located at /root/views/
		// change theme at config/constants 
		// check actual theme for possible values
		// [page_title, page_styles, navigation, user_profile, menu_aside, content_title, content_file, footer, page_scripts]

		//$this->data['page_title'] = 'Dashboard';
		//$this->data['menu_aside'] = 'menu_aside';
		$this->data['content_file'] = 'content_file_welcome';
		$this->data['content_title'] = 'Dashboard';
		//$this->data['page_scripts'] = 'js_welcome';
		//$this->data['page_styles'] = 'css_welcome';

		$this->load->view(THEME.'/index', $this->data);   


	}
}
