<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
        $this->load->model('signup_model',"signup");  
        $this->load->helper('string');
        $this->firephp->log('signup ajax' );

        //TODO: check if logged in then redirect to proper route

        $display_name = $this->input->post('fullname')?:'';
        $password = $this->input->post('password')?:'';
        $email = $this->input->post('email')?:'';
        $register_as = $this->input->post('register_as')?:'';
        $status_id = (int) $this->input->post('status_id')?:0;
        $sign_up = array(
            'display_name' => $display_name,
            'password' => $password,
            'email' => $email,
            'verify_code' => random_string('alnum', 8),
            'verified' => 0
        );
        $this->signup->add_signup($sign_up,$register_as);

        //send verify email here
        // $this->send_mail($sign_up);

        return true;
    }
    
    function send_mail($user)
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

        $message = '';
        $message .= '<p> Dear ' . $user['display_name'] . ',</p>';
        $message .= '<p> confirm mail to activate your SkillsDB Account - <a href="' . base_url().'signup/verify/'.$user['verify_code'].'">click here</a></p>'; 
        $message .= '<p> or copy and paste the following to your address bar: '. base_url().'signup/verify/'.$user['verify_code'];
        $message .= '<p> Thanks</p>';

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('admin@skillsdb.live'); 
        $this->email->to($user['email']);
        $this->email->subject('Action Required - Skillsbank account verification');
        $this->email->message($message);
        // if($this->email->send())
        // {
        //     $this->firephp->log('signup send email' );
        // }
        // else
        // {
        //     $this->firephp->log($this->email->print_debugger());
        // }
    }

    function verify()
    {
        $verify_code = $this->uri->segment(3)?:'';
        $this->firephp->log($verify_code);

        //get user with verify code
        $this->load->model('signup_model',"signup"); 
        $user = $this->signup->get_user_by_verify_code($verify_code);
        if (isset($user)){
			if ($user->status_id == 0 and $user->deleted == 1) {
                echo 'invalid user account';
                return;
            }
            //test if codes are the same
            if ($verify_code === $user->verify_code){
                echo 'account verified. login to continue.';
                echo "You will be redirected in 5 seconds...";
                header('Refresh:5; url= '. base_url().'login'); 

                //update verify account bit field
                $this->signup->update_user(array('verify_code'=>NULL,'verified'=>1),$user->idx);
            } else {
                echo 'invalid user account';
            }
            return;
        } else {
            echo 'invalid or expired code';
            return;
        }
    }
}
