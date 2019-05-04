<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applicant extends CI_Controller {
	function __construct(){
        // Construct the parent class
        parent::__construct();

		$this->load->model('person_model',"person"); 		// load from general model
		$this->load->model('applicant_model',"applicant");


        $this->load->helper(array('form', 'url'));

    }
	public function index()
	{

		$this->firephp->log('**** Applicant Controller ****' );
		//$this->output->enable_profiler(TRUE);ke
//		$this->load->helper(array('countries','form'));



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
		$this->data['page_scripts'] = 'finishprofilejs';
		//$this->data['page_styles'] = 'css_register_applicant';
		//$this->data['applicant'] = get_country_names();
		$this->data['user'] = $user;
		$this->data['person'] = $person;
		$this->data['applicant'] = $applicant;

		$this->data['country'] = $this->applicant->get_all_country_model();
		$this->data['country1'] = $this->applicant->get_all_country_model();

		$this->data['state'] = $this->applicant->get_all_state_model2();
		$this->data['city'] = $this->applicant->get_all_city_model2();
		$this->data['state2'] = $this->applicant->get_all_state_model2();
		$this->data['city2'] = $this->applicant->get_all_city_model2();
		$this->data['educ'] = $this->applicant->get_education_model();
		$this->data['profile'] = $this->applicant->get_applicant_model($person->idx);
		$this->data['language'] = $this->applicant->get_applicant_language_model($applicant->idx);
		$this->data['work'] = $this->applicant->get_applicant_work_model($applicant->idx);
		$this->data['address_curr'] = $this->applicant->get_applicant_addr_model($person->idx);
		$this->data['address_perm'] = $this->applicant->get_applicant_addrperm_model($person->idx);
		
		// $this->data['state'] = $this->applicant->get_all_state_model();


        //$this->firephp->log($applicant);
		$this->load->view(THEME.'/index', $this->data);   


	}

	public function get_all_city(){
		echo json_encode($this->applicant->get_all_city_model($this->input->post('idx')));
	}
	public function get_all_state(){
		echo json_encode($this->applicant->get_all_state_model($this->input->post('idx')));
	}

	public function update_applicant(){
		$idx = $this->input->post('idx');
		$app_id = $this->input->post('applicant_id');
		$data = array(
			'firstname' => $this->input->post('firstname'),
			'middlename' => $this->input->post('middlename'),
			'lastname' => $this->input->post('lastname'),
			'gender' => $this->input->post('gender'),
			'birthdate' => $this->input->post('birthdate'),
			'age' => $this->input->post('age'),
			'civil_status_id' => $this->input->post('civil_status_id'),
			'phone_number' => $this->input->post('phone_number'),
			'mobile_number' => $this->input->post('mobile_number'),
			'facebook_link' => $this->input->post('facebook_link')
		);
		$this->applicant->update_person_detail_model($idx, $data);
		// APPLICANT DATA
			$app_data = array(
			'educational_attainment_id' => $this->input->post('educational_attainment_id'),
			'school_name' => $this->input->post('school_name'),
			'degree' => $this->input->post('degree'),
			'education_year_finished' => $this->input->post('education_year_finished'),
			'profile_complete' => 1
			);
			$this->applicant->update_applicant_model($idx, $app_data);

		//CURRENT ADDRESS 
			$address_data1 = array(
				'line_1' => $this->input->post('c_line_1'),
				'line_2' => $this->input->post('c_line_2'),
				'city_id' => $this->input->post('c_city_id'),
				'state_id' => $this->input->post('c_state_id'),
				'country_id' => $this->input->post('c_country_id'),
			);
			$addr_id1 = $this->applicant->insert_address_model($address_data1);

			$person_address_data1 = array(
				'person_id' => $idx,
				'address_id' => $addr_id1,
				'address_type' => 'CURRENT',
				'status_id' => 1
			);
			$this->applicant->insert_personaddress_model($person_address_data1);

		//PERMANENT ADDRESS 
			$address_data2 = array(
				'line_1' => $this->input->post('p_line_1'),
				'line_2' => $this->input->post('p_line_2'),
				'city_id' => $this->input->post('p_city_id'),
				'state_id' => $this->input->post('p_state_id'),
				'country_id' => $this->input->post('p_country_id'),
			);
			$addr_id2 = $this->applicant->insert_address_model($address_data2);
			
			$person_address_data1 = array(
				'person_id' => $idx,
				'address_id' => $addr_id2,
				'address_type' => 'PERMANENT',
				'status_id' => 1
			);
			$this->applicant->insert_personaddress_model($person_address_data1);

			echo json_encode($addr_id1);


		// WORK
		if (count($this->input->post('company')) > 0) {
			foreach ($this->input->post('company') as $i => $value) {
				$work_data = array(
					'applicant_id' => $app_id,
					'from_date'=> $this->input->post('from_date')[$i],
					'to_date'=> $this->input->post('to_date')[$i],
					'company'=> $this->input->post('company')[$i],
					'location' => $this->input->post('location')[$i],
					'job_title' => $this->input->post('location')[$i],
					'job_description' => $this->input->post('location')[$i],
				);
				$this->applicant->insert_work_model($work_data);
			}
			
		}

		// LANG

		$eng_data = array(
			'applicant_id' => $app_id,
			'tested' => 1,
			'english_writing_level' => $this->input->post('english_writing_level'),
			'proficiency_exam_id' => $this->input->post('proficiency_exam'),
			'overall_score' => $this->input->post('overall_score'),
			'date_assessed' => $this->input->post('date_assessed'),
			'listening_score' => $this->input->post('listening_score'),
			'reading_score' => $this->input->post('reading_score'),
			'writing_score' => $this->input->post('writing_score'),
			'speaking_score' => $this->input->post('speaking_score'),
		);
		$this->applicant->insert_proficiency_model($eng_data);

		if (count($this->input->post('language')) > 0) {
			foreach ($this->input->post('language') as $i => $value) {
				$lang_data = array(
					'applicant_id' => $app_id,
					'language' => $value,
					'language_speaking_level' => $this->input->post('language_speaking_level')[$i],
					'language_writing_level' => $this->input->post('language_writing_level')[$i],
				);
				$this->applicant->insert_language_model($lang_data);
				// echo $value . "--->" . $this->input->post('language_speaking_level')[$i] . "--->" . $this->input->post('language_writing_level')[$i] . "|||||||";

			}

		}



			
	}
}

