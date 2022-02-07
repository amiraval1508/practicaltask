<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {
	public function index()
	{
		$user = $this->Model->select_where('users',$w=array('user_id'=>$this->session->userdata['user']['user_id']));
		if($user[0]['user_role']=='Admin'){
			$data['x'] = $this->Model->select('posts');
		}
		else
		{
			$data['x'] = $this->Model->select_where('posts',$w=array('post_user_id'=>$this->session->userdata['user']['user_id']));
		}
		$this->load->view('list_post',$data);
	}

	public function create()
	{
		$config['upload_path'] = './assets/uploads/posts/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 100000000000;
		$this->load->library('upload',$config);
		$data['error'] = $this->upload->display_errors();
		$this->load->view('create_post',$data);
	}

	public function insert()
	{
		$this->form_validation->set_rules('post_title','Title','required');
		$this->form_validation->set_rules('post_start','Start Date','required');
		$this->form_validation->set_rules('post_end','End Date','required');
		$this->form_validation->set_rules('post_desc','Description','required');
		$this->form_validation->set_rules('post_status','Post Status','required');
		if($this->form_validation->run()==TRUE)
		{
			$config['upload_path'] = './assets/uploads/posts/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = 100000000000;
			$this->load->library('upload',$config);
			if($this->upload->do_upload('post_img'))
			{
				$data = array('post_title'=>$this->input->post('post_title'),
							  'post_start_dt'=>date('Y-m-d',strtotime($this->input->post('post_start'))),
							  'post_end_dt'=>date('Y-m-d',strtotime($this->input->post('post_end'))),
							  'post_desc'=>$this->input->post('post_desc'),
							  'post_img'=>$this->upload->data('file_name'),
							  'post_status'=>$this->input->post('post_status'),
							  'post_user_id'=>$this->session->userdata['user']['user_id'],
							  'post_date'=>date('Y-m-d'));
				$xss_data = $this->security->xss_clean($data);
				$this->Model->insert('posts',$xss_data);
				$this->session->set_flashdata('msg','Registered Successfully');
				redirect('posts');
			}
			else
			{
				$data['error'] = $this->upload->display_errors();
				$this->load->view('create_post',$data);
			}
		}
		else
		{
			$this->index();
		}
	}
}
