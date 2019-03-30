<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('search_model');
		$this->load->helper(array('countries','form'));
	}

	public function index()
	{

        $this->firephp->log('my string message' );
		//$this->output->enable_profiler(TRUE);

        //$country_names = get_country_names();
        //$this->firephp->log($country_names);

		// Theme folder located at /root/views/
		// change theme at config/constants 
		// check actual theme for possible values
		// [page_title, page_styles, navigation, user_profile, menu_aside, content_title, content_file, footer, page_scripts]

		$this->data['page_title'] = 'Search Applicants';
		//$this->data['menu_aside'] = 'menu_aside';
		$this->data['content_file'] = 'content_search';
		$this->data['content_title'] = 'Search Applicants';
		$this->data['page_scripts'] = 'js_applicants_list';
        //$this->data['page_styles'] = 'css_register_partner';
        
        $this->data['applicants'] = $this->search_model->get_applicants();
        foreach ($this->data['applicants'] as $applicant) {
        	$this->data['work_experience'] = $this->search_model->get_experience($applicant->applicant_id);
        	$work_xp_count = count($this->data['work_experience']);
			$num_of_months = 0;
			for ($x=0; $x < $work_xp_count; $x++) {
				$first_date = $this->data['work_experience'][$x]->from_date;
				$second_date = $this->data['work_experience'][$x]->to_date;
				$num_of_months += (int)abs((strtotime($first_date) - strtotime($second_date))/(60*60*24*30));
			}
			$applicant->experience = $num_of_months;
        }

        //print_r($this->data['applicants']);

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
		$this->data['content_file'] = 'content_file_applicant_view';
		$this->data['content_title'] = 'Applicant View';
		$this->data['page_scripts'] = 'js_applicant_view';
		//$this->data['page_styles'] = 'css_applicant_view';
		// $applicant_data = array (
		// 	'idx' => $applicant_id
		// );
		$this->data['applicant'] = $this->search_model->get_applicant($applicant_id);
		$this->data['user'] = $this->search_model->get_user($this->data['applicant'][0]->person_id);
		$this->data['person'] = $this->search_model->get_person($this->data['applicant'][0]->person_id);
		$this->data['address'] = $this->search_model->get_addresses($this->data['applicant'][0]->person_id);
		$this->data['work_experience'] = $this->search_model->get_experience($applicant_id);
		$this->data['proficiency_exam'] = $this->search_model->get_proficiency_exam($applicant_id);
		$this->data['languages'] = $this->search_model->get_languages($applicant_id);
		$this->data['spouse'] = $this->search_model->get_spouse($applicant_id);
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

	public function hire_applicant()
	{
		$applicant_id = $this->input->post('key');
		$company_id = 1; //as is lang sa ni, dapat kuha sa session_id

		$data = [
			'company_id' => $company_id,
			'applicant_id' => $applicant_id,
			'status' => 'PENDING'
		];

		$return_a = $this->search_model->update_applicant($applicant_id);

		$return_b = $this->search_model->hire_applicant($data);

		if ($return_a > 0 && $return_b > 0) {
			echo json_encode(array('ret'=>'1','new_url'=>base_url('partners/search')));
		}
	}
}
