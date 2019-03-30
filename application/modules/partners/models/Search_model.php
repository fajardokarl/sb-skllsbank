<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends MY_Model{
    
    public function get_applicants(){

        $this->db->select('applicant.idx as applicant_id, person.display_name as applicant_name, user.created as date_registered, person.job_title as job, applicant.approved as applicant_status');
        // $this->db->select('*');
        $this->db->from('applicant');
        $this->db->join('person', 'person.idx=applicant.person_id', 'inner');
        $this->db->join('user', 'user.person_id=applicant.person_id', 'inner');
        $this->db->where('user.completed', 1);
        $this->db->where('applicant.approved', 1);
        $this->db->where('applicant.for_hiring', 1);
        $this->db->or_where('applicant.approved', 2);
        $this->db->where('applicant.for_hiring', 1);
        $this->db->where('user.completed', 1);
        $this->db->order_by('applicant.idx', 'desc');
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

    public function update_applicant($applicant){

        $data = array(
            'for_hiring' => 0
        );

        $this->db->where('idx', $applicant);
        $result = $this->db->update('applicant', $data);
        return $result;
    }

    public function hire_applicant($data){

        $this->db->insert('hiring', $data);
        return $this->db->affected_rows();
    }


}