<?php
defined('BASEPATH') OR exit('No script access allow direct');
class PublicAdminModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function isLogin()
	{
		if(isset($_SESSION['adminInfo']) && !empty($_SESSION['adminInfo'])) {
			return true;
		}
		return false;
	}

}