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
		$this->data['hirings'] = $this->hiring_model->get_hirings();
		//print_r($this->data['hirings']);
		$this->load->view(THEME.'/index', $this->data);
	}

	public function hiring_view($id)
	{
		$this->firephp->log('my string message' );
		//$this->output->enable_profiler(TRUE);

		// Theme folder located at /root/views/
		// change theme at config/constants 
		// check actual theme for possible values
		// [page_title, page_styles, navigation, user_profile, menu_aside, content_title, content_file, footer, page_scripts]

		$this->data['page_title'] = 'Hiring View';
		//$this->data['menu_aside'] = 'menu_aside';
		$this->data['content_file'] = 'content_file_hiring_view';
		$this->data['content_title'] = 'Hiring View';
		$this->data['page_scripts'] = 'js_hiring_view';
		$this->data['page_styles'] = 'css_hiring_view';
		
		// APPLICANT DATA
		$this->data['hiring'] = $this->hiring_model->get_single_hiring($id);
		$this->data['applicant'] = $this->hiring_model->get_applicant($this->data['hiring'][0]->applicant_id);
		$this->data['user'] = $this->hiring_model->get_user($this->data['applicant'][0]->person_id);
		$this->data['person'] = $this->hiring_model->get_person($this->data['applicant'][0]->person_id);
		$this->data['address'] = $this->hiring_model->get_addresses($this->data['applicant'][0]->person_id);
		$this->data['work_experience'] = $this->hiring_model->get_experience($this->data['hiring'][0]->applicant_id);
		$this->data['proficiency_exam'] = $this->hiring_model->get_proficiency_exam($this->data['hiring'][0]->applicant_id);
		$this->data['languages'] = $this->hiring_model->get_languages($this->data['hiring'][0]->applicant_id);
		$this->data['spouse'] = $this->hiring_model->get_spouse($this->data['hiring'][0]->applicant_id);
		//print_r($this->data['applicant']);
		$work_xp_count = count($this->data['work_experience']);
		$num_of_months = 0;
		for ($x=0; $x < $work_xp_count; $x++) {
			$first_date = $this->data['work_experience'][$x]->from_date;
			$second_date = $this->data['work_experience'][$x]->to_date;
			$num_of_months += (int)abs((strtotime($first_date) - strtotime($second_date))/(60*60*24*30));
		}
		$this->data['exp_length'] = $num_of_months;

		// COMPANY DATA
		$this->data['company'] = $this->hiring_model->get_company($this->data['hiring'][0]->company_id);
		$this->data['company_address'] = $this->hiring_model->get_company_address($this->data['company'][0]->company_address_id);
		$this->data['contact_person'] = $this->hiring_model->get_contact_person($this->data['company'][0]->contact_person_id);
		$this->data['person_address'] = $this->hiring_model->get_addresses($this->data['contact_person'][0]->idx);
		$this->data['user_company'] = $this->hiring_model->get_user($this->data['company'][0]->contact_person_id);
		//print_r($this->data['hiring'][0]->applicant_id);
		$this->load->view(THEME.'/index', $this->data);
	}

	public function send_email()
	{
		$config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.skillsdb.live',
            'smtp_port' => 587,
            'smtp_user' => 'admin@skillsdb.live', // change it to yours
            'smtp_pass' => 'XbYNG3uMV4dh', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'starttls'  => true,
            'wordwrap' => TRUE
        );

        $message = $this->input->post('message');

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('admin@skillsdb.live'); 
        $this->email->to($this->input->post('email'));
        $this->email->subject('Hiring');
        $this->email->message($message);

        $result = $this->hiring_model->send_email($this->input->post('key'),$message);
        if($this->email->send())
        {
            $this->firephp->log('email sent');
            if ($return) {
				echo json_encode(array('ret'=>'1','new_url'=>base_url('kenton/hiring')));
			}
        }
        else
        {
            $this->firephp->log($this->email->print_debugger());
        }
	}

	public function mark_hired()
	{
		$hiring_id = $this->input->post('key');
		$return = $this->hiring_model->mark_hired($hiring_id);

		if ($return) {
			echo json_encode(array('ret'=>'1','new_url'=>base_url('kenton/hiring')));
		}
	}

}
