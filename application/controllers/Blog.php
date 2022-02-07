<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index()
	{
		$data['x'] = $this->Model->select_where('posts',$w=array('post_status'=>'Active'));
		$this->load->view('blog',$data);
	}

}
