<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accounts_model extends MY_Model{
    
    public function get_applicants(){

        $this->db->select('applicant.idx as applicant_id, person.display_name as applicant_name, user.created as date_registered, person.job_title as job, applicant.approved as applicant_status');
        // $this->db->select('*');
        $this->db->from('applicant');
        $this->db->join('person', 'person.idx=applicant.person_id', 'inner');
        $this->db->join('user', 'user.person_id=applicant.person_id', 'inner');
        $this->db->where('applicant.profile_complete', 1);
        $this->db->where('applicant.approved', 1);
        $this->db->order_by('applicant.idx', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_employers(){

        $this->db->select('partner.idx as company_id, partner.company_name as company_name, person.display_name as contact_person, user.created as date_registered, person.job_title as job, partner.approved as company_status');
        //$this->db->select('*');
        $this->db->from('partner');
        $this->db->join('person', 'person.idx=partner.contact_person_id', 'inner');
        $this->db->join('user', 'user.person_id=partner.contact_person_id', 'inner');
        $this->db->where('partner.profile_complete', 1);
        $this->db->where('partner.approved', 1);
        $this->db->order_by('partner.idx', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_user($person){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('person', 'person.idx=user.person_id', 'inner');
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


}