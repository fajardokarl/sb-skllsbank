<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Person_model extends MY_Model{
    
    private $idx;
    private $person;

    public function get_person(){

        $this->table = 'person';
        $this->person = $this->selectItem(array('idx'=>$this->idx));
    }
    
    public function get_person_by_user_id($user_id){

        $this->idx = $user_id;
        $this->get_person();
        //$this->firephp->log($this->person);
        return $this->person;
    }

}