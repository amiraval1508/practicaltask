<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		if(isset($this->session->userdata['user']))
		{
			redirect('blog');
		}
		else
		{
			$this->load->view('login');
		}
	}

	public function signin()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()==TRUE)
		{
			$email = $this->input->post('email');
			$pass  = $this->input->post('password');
			$user = $this->Model->select_where('users',$w=array('user_email'=>$email));
			if($user)
			{
				if($user[0]['user_status']=='Active')
				{
					if(password_verify($pass, $user[0]['user_pass']))
					{
						$user['user'] = array('user_id'=>$user[0]['user_id']);
						$this->session->set_userdata($user);
						redirect('blog');
					}
					else
					{
						$this->session->set_flashdata('error','Incorrect Password');
						redirect('Login');
					}
				}
				else
				{
					$this->session->set_flashdata('error','User Inactive');
					redirect('Login');
				}
			}
			else
			{
				$this->session->set_flashdata('error','Invalid User');
				redirect('Login');
			}
		}
		else
		{
			$this->index();
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		$this->session->sess_destroy();
		redirect('Login');
	}
}
