<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*** 
DROP TABLE IF EXISTS `person`;
CREATE TABLE `person` (
  `idx` double NOT NULL,
  `display_name` varchar(75) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT '',
  `firstname` varchar(50) DEFAULT '',
  `middlename` varchar(50) DEFAULT '',
  `prefix` varchar(10) DEFAULT '',
  `suffix` varchar(10) DEFAULT '',
  `sex` char(1) DEFAULT '',
  `birthdate` date DEFAULT NULL,
  `birthplace` varchar(50) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `civil_status_id` tinyint(4) DEFAULT NULL,
  `tin` varchar(30) DEFAULT NULL,
  `picture_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `idx` double NOT NULL,
  `person_id` double NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `created_by` double DEFAULT NULL,
  `status_id` tinyint(4) DEFAULT NULL COMMENT '0-unverified,1-active,2-suspended,3-deleted',
  `deleted` tinyint(1) DEFAULT '0',
  `last_logged` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

***/

class Signup_model extends MY_Model{
    
    function add_signup($data,$type){

        $this->db->trans_start();

        // save to person table
        $this->table = 'person';
        $person_id = '';
        $person = array(
            'display_name' => $data['display_name']
        );
        $person_id = $this->insertItem($person);
        
        // save to user table
        $this->table = 'user';
        $user = array(
            'person_id' => $person_id,
            'username' => $data['email'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_BCRYPT),
            'verify_code' => $data['verify_code'],
            'verified' => 0,
            'deleted' => 0,
            'status_id' => 1
        );
        $user_id = $this->insertItem($user);

        // base on user_role save to corresponding table
        switch($type){
            case "applicant":
                $role_id = 5;
                // save to applicant table
                $this->table = 'applicant';
                $applicant = array(
                    'person_id' => $person_id,
                    'profile_complete' => 0
                );
                $this->insertItem($applicant);
                break;
            case "company":
                $role_id = 4;
                // save to partner table
                $this->table = 'partner';
                $partner = array(
                    'contact_person_id' => $person_id,
                    'profile_complete' => 0
                );
                $this->insertItem($partner);
                break;
        }
        //save register_as role
        $this->table = 'user_role';
        $user_role = array(
            'user_id' => $user_id,
            'role_id' => $role_id
        );
        $user_id = $this->insertItem($user_role);

		$this->db->trans_complete();
    }
    
    public function get_user_by_verify_code($verify_code)
    {
        $this->table = 'user';
        $user = $this->selectItem(array('verify_code'=>$verify_code));
        return $user;
    }

    public function update_user($data,$idx)
    {
        $this->table = 'user';
        $this->updateItem($data, array('idx'=>$idx));
    }

}