<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('accounts_model');
		$this->load->helper(array('countries','form'));
	}

	public function new_account()
	{

		$this->firephp->log('my string message' );
		//$this->output->enable_profiler(TRUE);ke
		$this->load->helper(array('countries','form'));


		// Theme folder located at /root/views/
		// change theme at config/constants 
		// check actual theme for possible values
		// [page_title, page_styles, navigation, user_profile, menu_aside, content_title, content_file, footer, page_scripts]

		$this->data['page_title'] = 'New Account';
		//$this->data['menu_aside'] = 'menu_aside';
		$this->data['content_file'] = 'content_file_admin_new_account';
		$this->data['content_title'] = 'New Admin Account';
		// $this->data['page_scripts'] = 'js_applicant_waitlist';
		// $this->data['page_styles'] = 'css_applicant_waitlist';
		//$this->data['applicants'] = get_country_names();

		$this->load->view(THEME.'/index', $this->data);   


	}

	public function applicants()
	{
		$this->firephp->log('my string message' );
		//$this->output->enable_profiler(TRUE);

		// Theme folder located at /root/views/
		// change theme at config/constants 
		// check actual theme for possible values
		// [page_title, page_styles, navigation, user_profile, menu_aside, content_title, content_file, footer, page_scripts]

		$this->data['page_title'] = 'Applicant List';
		//$this->data['menu_aside'] = 'menu_aside';
		$this->data['content_file'] = 'content_file_applicant_list';
		$this->data['content_title'] = 'Applicant List';
		$this->data['page_scripts'] = 'js_applicant_list';
		//$this->data['page_styles'] = 'css_applicant_list';
		$this->data['applicants'] = $this->accounts_model->get_applicants();
		//print_r($this->data['applicants']);
		$this->load->view(THEME.'/index', $this->data); 
	}

	public function partners()
	{

		$this->firephp->log('my string message' );
		//$this->output->enable_profiler(TRUE);

		// Theme folder located at /root/views/
		// change theme at config/constants 
		// check actual theme for possible values
		// [page_title, page_styles, navigation, user_profile, menu_aside, content_title, content_file, footer, page_scripts]

		$this->data['page_title'] = 'Company List';
		//$this->data['menu_aside'] = 'menu_aside';
		$this->data['content_file'] = 'content_file_company_list';
		$this->data['content_title'] = 'Company List';
		$this->data['page_scripts'] = 'js_company_list';
		//$this->data['page_styles'] = 'css_company_waitlist';
		$this->data['employers'] = $this->accounts_model->get_employers();
		//print_r($this->data['employers']);
		$this->load->view(THEME.'/index', $this->data);   


	}

	public function applicant_view($applicant_id)
	{
		$this->firephp->log('my string message' );
		//$this->output->enable_profiler(TRUE);

		// Theme folder located at /root/views/
		// change theme at config/constants 
		// check actual theme for possible values
		// [page_title, page_styles, navigation, user_profile, menu_aside, content_title, content_file, footer, page_scripts]

		$this->data['page_title'] = 'Applicant View';
		//$this->data['menu_aside'] = 'menu_aside';
		$this->data['content_file'] = 'content_file_accepted_applicant_view';
		$this->data['content_title'] = 'Applicant View';
		$this->data['page_scripts'] = 'js_applicant_view';
		$this->data['page_styles'] = 'css_applicant_view';
		// $applicant_data = array (
		// 	'idx' => $applicant_id
		// );
		$this->data['applicant'] = $this->accounts_model->get_applicant($applicant_id);
		$this->data['user'] = $this->accounts_model->get_user($this->data['applicant'][0]->person_id);
		$this->data['person'] = $this->accounts_model->get_person($this->data['applicant'][0]->person_id);
		$this->data['address'] = $this->accounts_model->get_addresses($this->data['applicant'][0]->person_id);
		$this->data['work_experience'] = $this->accounts_model->get_experience($applicant_id);
		$this->data['proficiency_exam'] = $this->accounts_model->get_proficiency_exam($applicant_id);
		$this->data['languages'] = $this->accounts_model->get_languages($applicant_id);
		$this->data['spouse'] = $this->accounts_model->get_spouse($applicant_id);
		//print_r($this->data['applicant']);
		$work_xp_count = count($this->data['work_experience']);
		$num_of_months = 0;
		for ($x=0; $x < $work_xp_count; $x++) {
			$first_date = $this->data['work_experience'][$x]->from_date;
			$second_date = $this->data['work_experience'][$x]->to_date;
			$num_of_months += (int)abs((strtotime($first_date) - strtotime($second_date))/(60*60*24*30));
		}
		$this->data['exp_length'] = $num_of_months;

		$this->load->view(THEME.'/index', $this->data);
	}

	public function company_view($company_id)
	{
		$this->firephp->log('my string message' );
		//$this->output->enable_profiler(TRUE);

		// Theme folder located at /root/views/
		// change theme at config/constants 
		// check actual theme for possible values
		// [page_title, page_styles, navigation, user_profile, menu_aside, content_title, content_file, footer, page_scripts]

		$this->data['page_title'] = 'Company View';
		//$this->data['menu_aside'] = 'menu_aside';
		$this->data['content_file'] = 'content_file_accepted_company_view';
		$this->data['content_title'] = 'Company View';
		$this->data['page_scripts'] = 'js_company_view';
		$this->data['page_styles'] = 'css_company_view';
		$this->data['company'] = $this->accounts_model->get_company($company_id);
		$this->data['company_address'] = $this->accounts_model->get_company_address($this->data['company'][0]->company_address_id);
		$this->data['contact_person'] = $this->accounts_model->get_contact_person($this->data['company'][0]->contact_person_id);
		$this->data['person_address'] = $this->accounts_model->get_addresses($this->data['contact_person'][0]->idx);
		$this->data['user'] = $this->accounts_model->get_user($this->data['company'][0]->contact_person_id);
		//print_r($this->data['company']);
		$this->load->view(THEME.'/index', $this->data);
	}
}
