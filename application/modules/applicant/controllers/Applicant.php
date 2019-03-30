<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applicant extends CI_Controller {

	public function index()
	{

		$this->firephp->log('**** Applicant Controller ****' );
		//$this->output->enable_profiler(TRUE);ke
//		$this->load->helper(array('countries','form'));

		$this->load->model('person_model',"person"); 		// load from general model
		$this->load->model('applicant_model',"applicant");

		// Theme folder located at /root/views/
		// change theme at config/constants 
		// check actual theme for possible values
		// [page_title, page_styles, navigation, user_profile, menu_aside, content_title, content_file, footer, page_scripts]

		//get user data from session
		$user = $this->session->userdata('user');   // array data
		$person = $this->person->get_person_by_user_id($user['idx']);   // class data
		$applicant = $this->applicant->get_applicant_by_person_id($person->idx);  // class data
		//$this->firephp->log($applicant);

		$this->data['page_title'] = 'Applicant Home';
        //$this->data['menu_aside'] = 'menu_aside';
        $this->data['navigation']   = 'applicant_navigation';
        $this->data['user_profile']   = 'applicant_user_profile';
        $this->data['content_file'] = 'applicant_content_dashboard';
		$this->data['content_title'] = 'Applicant Home Content';
		//$this->data['page_scripts'] = 'js_register_applicant';
		//$this->data['page_styles'] = 'css_register_applicant';
		//$this->data['applicant'] = get_country_names();
		$this->data['user'] = $user;
		$this->data['person'] = $person;
		$this->data['applicant'] = $applicant;

        //$this->firephp->log($applicant);
		$this->load->view(THEME.'/index', $this->data);   


	}
}

