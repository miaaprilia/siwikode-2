<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function check_login()
	{
		$username 	= $this->input->post('username');
		$password 	= SHA1($this->input->post('password'));
		$data 		= $this->M_data->check_login($username, $password);

		if($data){

			$user = $this->M_data->get_userwhere($data);

			foreach ($user as $user) {
				$level = $user['level'];
			}

			$user_data = array(
				'id' => $data,
				'lvl' => $level 
			);


			$this->session->set_userdata($user_data);

			redirect('admin'); 

		}else{
			redirect();
		}


	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect();
	}
}
