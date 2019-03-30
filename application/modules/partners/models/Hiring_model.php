<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hiring_model extends MY_Model{

	public function get_hirings($id){

		//$this->db->select('*, hiring.idx as hiring_idx, hiring.hiring_date as date, hiring.status as hiring_status, partner.idx as company_id, partner.company_name as company_name person.display_name as applicant_name');
		$this->db->select('*, hiring.idx as hiring_id, hiring.hiring_date as hiring_date_requested, hiring.status as hiring_status, hiring.company_id as partner_id, hiring.applicant_id as app_id, person.job_title as job_title');
		$this->db->from('hiring');
		$this->db->join('partner', 'partner.idx=hiring.company_id', 'inner');
		$this->db->join('applicant', 'applicant.idx=hiring.applicant_id', 'inner');
		$this->db->join('person', 'person.idx=applicant.person_id', 'inner');
		$this->db->where('hiring.idx', $id);
		$query = $this->db->get();
        return $query->result();
	}
}