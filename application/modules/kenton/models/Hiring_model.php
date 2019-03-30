<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hiring_model extends MY_Model{

	public function get_hirings(){

		//$this->db->select('*, hiring.idx as hiring_idx, hiring.hiring_date as date, hiring.status as hiring_status, partner.idx as company_id, partner.company_name as company_name person.display_name as applicant_name');
		$this->db->select('*, hiring.idx as hiring_id, hiring.hiring_date as hiring_date_requested, hiring.status as hiring_status, hiring.company_id as partner_id, hiring.applicant_id as app_id');
		$this->db->from('hiring');
		$this->db->join('partner', 'partner.idx=hiring.company_id', 'inner');
		$this->db->join('applicant', 'applicant.idx=hiring.applicant_id', 'inner');
		$this->db->join('person', 'person.idx=applicant.person_id', 'inner');
		$this->db->where('hiring.idx >', 0);
		$query = $this->db->get();
        return $query->result();
	}

	public function get_user($person){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('person_id', $person);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_person($person){

        $this->db->select('*');
        $this->db->from('person');
        $this->db->join('civil_status', 'person.civil_status_id=civil_status.civil_status_id','inner');
        $this->db->where('person.idx', $person);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_applicant($applicant){

        $this->db->select('*');
        $this->db->from('applicant');
        $this->db->join('educational_attainment', 'educational_attainment.educational_attainment_id=applicant.educational_attainment_id', 'join');
        $this->db->where('applicant.idx', $applicant);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_addresses($person){

        $this->db->select('*, address_city.name as city, address_state.name as state, address_country.name as country');
        $this->db->from('person_address');
        $this->db->join('address', 'address.idx=person_address.address_id', 'inner');
        $this->db->join('address_city', 'address_city.idx=address.city_id', 'inner');
        $this->db->join('address_state', 'address_state.idx=address.state_id', 'inner');
        $this->db->join('address_country', 'address_country.idx=address.country_id','inner');
        $this->db->where('person_address.person_id',$person);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_experience($applicant){

        $this->db->select('*');
        $this->db->from('work_experience');
        $this->db->where('applicant_id', $applicant);
        $this->db->order_by('from_date','asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_proficiency_exam($applicant){

        $this->db->select('*');
        $this->db->from('applicant_proficiency_exam');
        $this->db->join('proficiency_exam', 'proficiency_exam.proficiency_exam_id=applicant_proficiency_exam.proficiency_exam_id', 'inner');
        $this->db->where('applicant_proficiency_exam.applicant_id', $applicant);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_languages($applicant){

        $this->db->select('*');
        $this->db->from('applicant_languages');
        $this->db->where('applicant_id', $applicant);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_spouse($applicant){

        $this->db->select('*, educational_attainment.educational_attainment_name as highest, proficiency_exam.proficiency_exam_name as prof_exam, spouse.proficiency_exam_id as prof_exam_id');
        $this->db->from('spouse');
        $this->db->join('educational_attainment', 'spouse.spouse_highest_educational_background_id=educational_attainment.educational_attainment_id', 'inner');
        $this->db->join('proficiency_exam', 'proficiency_exam.proficiency_exam_id=spouse.proficiency_exam_id', 'inner');
        $this->db->where('applicant_id', $applicant);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_company($company_id){

        $this->db->select('*');
        $this->db->from('partner');
        $this->db->where('idx', $company_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_company_address($id){

        $this->db->select('*, address_city.name as city_name, address_state.name as state_name, address_country.name as country_name');
        $this->db->from('address');
        $this->db->join('address_city', 'address_city.idx=address.city_id', 'inner');
        $this->db->join('address_state', 'address_state.idx=address.state_id', 'inner');
        $this->db->join('address_country', 'address_country.idx=address.country_id', 'inner');
        $this->db->where('address.idx', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_contact_person($id){

        $this->db->select('*');
        $this->db->from('person');
        $this->db->where('idx', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_single_hiring($id){

    	$this->db->select('*');
    	$this->db->from('hiring');
    	$this->db->where('idx', $id);
    	$query = $this->db->get();
        return $query->result();
    }

    public function send_email($id,$message){
    	$data = array(
            'message' => $message,
            'status' => 'NOTIFIED'
        );

        $this->db->where('idx', $id);
        $result = $this->db->update('hiring', $data);
        return $result;
    }

    public function mark_hired($id){
    	$data = array(
            'status' => 'HIRED'
        );

        $this->db->where('idx', $id);
        $result = $this->db->update('hiring', $data);
        return $result;
    }
}