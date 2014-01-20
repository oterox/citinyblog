<?php

class Users extends CI_Controller{
	
	function login(){
		$data['error']=0;
		if($_POST){
			$this->load->model('admin/user');
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			$user=$this->user->login($username,$password);
			if(!$user){
				$data['error']=1;
			} else {
				$newdata = array(
                   'userID'  	=> $user['userID'],
                   'username'  	=> $user['username'],
                   'user_type'	=> $user['user_type'],
                   'logged_in'	=> TRUE
           		);

				$this->session->set_userdata($newdata);
				
				redirect(base_url().'posts');
			}
		}

		$this->load->view('admin/login',$data);

	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'posts');
	}
}