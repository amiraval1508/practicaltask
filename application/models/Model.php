<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
	public function insert($table,$data)
	{
		return $this->db->insert($table,$data);
	}

	public function select($table)
	{
		$select = $this->db->get($table);
		return $select->result_array();
	}

	public function select_where($table,$where)
	{
		$select = $this->db->get_where($table,$where);
		return $select->result_array();
	}

	public function update($table,$data,$where)
	{
		return $this->db->update($table,$data,$where);
	}

	public function delete($table,$where)
	{
		$this->db->delete($table,$where);
	}
}
