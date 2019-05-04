<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applicant_model extends MY_Model{
    
    function get_applicant_by_person_id($idx){

        $this->table = 'applicant';
        $applicant = $this->selectItem(array('person_id'=>$idx));
        $this->firephp->log($applicant);
        return $applicant;
    }
    

    // SELECTS
    function get_all_country_model(){
    	$this->db->select('*');
    	$this->db->from('address_country');
      	$query = $this->db->get();
      	return $query->result_array();
    }


    function get_all_state_model($id){
    	$this->db->select('*');
    	$this->db->from('address_state');
    	$this->db->where('country_id', $id);
      	$query = $this->db->get();
      	return $query->result_array();
    }

    function get_all_city_model($id){
    	$this->db->select('*');
    	$this->db->from('address_city');
    	$this->db->where('state_id', $id);
      	$query = $this->db->get();
      	return $query->result_array();
    }

    function get_all_state_model2(){
        $this->db->select('*');
        $this->db->from('address_state');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_all_city_model2(){
        $this->db->select('*');
        $this->db->from('address_city');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_education_model(){
        $this->db->select('*');
        $this->db->from('educational_attainment');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_applicant_model($id){
        $this->db->select('*');
        $this->db->from('applicant a');
        $this->db->join('person b', 'a.person_id = b.idx', 'inner');
        $this->db->join('user c', 'a.person_id = c.person_id', 'inner');
        $this->db->where('a.person_id', $id);
        $query = $this->db->get();
        $data = array();
        // $data;
        if($query !== FALSE && $query->num_rows() > 0){
            $data = $query->row();
        }
        return $data;
    }

    function get_applicant_language_model($id){
        $this->db->select('*');
        $this->db->from('applicant_languages a');
        $this->db->where('applicant_id', $id);
        $query = $this->db->get();
        $data = array();
        if($query !== FALSE && $query->num_rows() > 0){
            $data = $query->result_array();
        }
        return $data;
    }

    function get_applicant_work_model($id){
        $this->db->select('*');
        $this->db->from('work_experience a');
        $this->db->where('applicant_id', $id);
        $query = $this->db->get();
        $data = array();
        if($query !== FALSE && $query->num_rows() > 0){
            $data = $query->result_array();
        }
        return $data;
    }   
    function get_applicant_addr_model($id){
        $this->db->select('*, h.name AS city_name, i.name AS country_name, j.name AS state_name');
        $this->db->from('person_address e');
        $this->db->join('address f', 'e.address_id = f.idx', 'inner');
        $this->db->join('address_city h', 'f.city_id = h.idx', 'inner');
        $this->db->join('address_country i', 'f.country_id = i.idx', 'inner');
        $this->db->join('address_state j', 'f.state_id = j.idx', 'inner');
        $this->db->where('e.address_type', 'CURRENT');
        $this->db->where('e.person_id', $id);
       
        $query = $this->db->get();
        $data = array();
        if($query !== FALSE && $query->num_rows() > 0){
            $data = $query->row();
        }
        return $data;
    }   
    function get_applicant_addrperm_model($id){
        $this->db->select('*, h.name AS city_name, i.name AS country_name, j.name AS state_name');
        $this->db->from('person_address e');
        $this->db->join('address f', 'e.address_id = f.idx', 'inner');
        $this->db->join('address_city h', 'f.city_id = h.idx', 'inner');
        $this->db->join('address_country i', 'f.country_id = i.idx', 'inner');
        $this->db->join('address_state j', 'f.state_id = j.idx', 'inner');
        $this->db->where('e.address_type', 'PERMANENT');
        $this->db->where('e.person_id', $id);
        
        $query = $this->db->get();
        $data = array();
        if($query !== FALSE && $query->num_rows() > 0){
            $data = $query->row();
        }
        return $data;
    }   

    // INSERTS
    function insert_address_model($data){
        $this->db->trans_start();
        $this->db->insert('address', $data);
        $idx = $this->db->insert_id();
        $this->db->trans_complete();
        return $idx;
    }

    function insert_personaddress_model($data){
        $this->db->trans_start();
        $this->db->insert('person_address', $data);
        $idx = $this->db->insert_id();
        $this->db->trans_complete();
        return $idx;
    }

    function insert_work_model($data){
        $this->db->trans_start();
        $this->db->insert('work_experience', $data);
        // $this->db->insert_id();
        $this->db->trans_complete();
    }
    function insert_proficiency_model($data){
        $this->db->trans_start();
        $this->db->insert('applicant_proficiency_exam', $data);
        // $this->db->insert_id();
        $this->db->trans_complete();
    }

    function insert_language_model($data){
;
        $this->db->trans_start();
        $this->db->insert('applicant_languages', $data);
        $idx = $this->db->insert_id();
        $this->db->trans_complete();
        return $idx;
    }

    // UPDATES
    function update_person_detail_model($id, $data){
    	$this->db->trans_start();
        $this->db->where('idx', $id);
        $this->db->update('person', $data);
        $this->db->trans_complete();
    }

    function update_applicant_model($id, $data){
    	$this->db->trans_start();
        $this->db->where('person_id', $id);
        $this->db->update('applicant', $data);
        $this->db->trans_complete();
    }





}