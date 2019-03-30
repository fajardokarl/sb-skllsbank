<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends MY_Model{
    
    function get_user($form_user){

        $this->table = 'user';

        $user = $this->selectItemArray($form_user);
        return $user;
    }
    
    function get_user_role($user_id){

        $this->table = 'user_role';
        $user_role = $this->selectItemArray(array('user_id'=>$user_id));
        
        $this->table = 'role';
        $role = $this->selectItemArray(array('idx'=>$user_role['role_id']));

        return $role;
    }


}