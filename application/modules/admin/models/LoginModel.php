<?php
defined('BASEPATH') OR exit('No script access allow direct');
class LoginModel extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function doLogin($data)
	{
		$where = array('email' => $data['email'], 'isActive' => 1);
		$this->db->select('*')->from('users')->where($where)->limit(1);
		$query = $this->db->get();
		$user = $query->row_array();
		if(!empty($user) && password_verify($data['password'], $user['password'])) {
			$this->session->set_userdata('userInfo', $user);
			return true;
		}
		return false;
	}

}