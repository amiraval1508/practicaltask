<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index()
	{
		if(isset($this->session->userdata['user']))
		{
			redirect('blog');
		}
		else
		{
		$config['upload_path'] = './assets/uploads/users/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 100000000000;
		$this->load->library('upload',$config);
		$data['error'] = $this->upload->display_errors();
		$this->load->view('register',$data);
		}
	}

	public function register_user()
	{
		$this->form_validation->set_rules('user_fname','First Name','required');
		$this->form_validation->set_rules('user_lname','Last Name','required');
		$this->form_validation->set_rules('user_email','Email','required|valid_email|is_unique[users.user_email]');
		$this->form_validation->set_rules('user_pass','Password','required|min_length[5]');
		$this->form_validation->set_rules('user_dob','Date of Birth','required|min_length[5]');
		$this->form_validation->set_rules('user_role','Role','required');
		if($this->form_validation->run()==TRUE)
		{
			$config['upload_path'] = './assets/uploads/users/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = 100000000000;
			$this->load->library('upload',$config);
			if($this->upload->do_upload('user_img'))
			{
				$data = array('user_fname'=>$this->input->post('user_fname'),
							  'user_lname'=>$this->input->post('user_lname'),
							  'user_email'=>$this->input->post('user_email'),
							  'user_pass'=>password_hash($this->input->post('user_pass'), PASSWORD_BCRYPT),
							  'user_dob'=>date('Y-m-d',strtotime($this->input->post('user_dob'))),
							  'user_img'=>$this->upload->data('file_name'),
							  'user_role'=>$this->input->post('user_role'),
							  'user_status'=>'Active',
							  'user_regdt'=>date('Y-m-d'));
				$xss_data = $this->security->xss_clean($data);
				$this->Model->insert('users',$xss_data);
				$this->session->set_flashdata('msg','Registered Successfully');
				redirect('Login');
			}
			else
			{
				$data['error'] = $this->upload->display_errors();
				$this->load->view('register',$data);
			}
		}
		else
		{
			$this->index();
		}
	}
}
