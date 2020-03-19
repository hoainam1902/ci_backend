<?php
defined('BASEPATH') OR exit('No script access allow direct');
class PublicModels extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function addUser($email, $password)
	{
		$password = password_hash($password, PASSWORD_DEFAULT);
		$user = array('email' => $email, 'password' => $password, 'isActive' => 1);
		$this->db->insert('users', $user);
	}

	public function doLogin($email, $password)
	{
		$where = array('email' => $email, 'isActive' => 1);
		$this->db->select('*')->from('users')->where($where)->limit(1);
		$query = $this->db->get();
		$user = $query->row_array();
		if(!empty($user) && password_verify($password, $user['password'])) {
			$this->session->set_userdata('isLogin', true);
			$this->session->set_userdata('userDetails', $user);
			return true;
		}
		return false;
		// header('Localtion:'. route('account.login'));
	}

	public function isLogin()
	{
		if(isset($_SESSION['userInfo']) && !empty($_SESSION['userInfo'])) {
			return true;
		}
		return false;
	}

	public function checkLogin()
	{
		if(isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true && !empty($_SESSION['userDetails'])) {
			return true;
		}
		return false;
	}

	// Order

	public function saveOrder($data)
	{
		

	}

	// End Order

	public function selectAllProduct()
	{
		$query = $this->db->get('products');
		return $query;
	}

	public function selectAllProductOfBrand($brand)
	{
		$this->db->select('products.*,category.name as category_name')->from('products')->join('category_product', 'products.id = category_product.product_id')->join('category', 'category.id = category_product.category_id')->where('category.slug', $brand);
		$query = $this->db->get();
		return $query;
	}

	public function selectAllBrand()
	{
		$query = $this->db->get('category');
		return $query;
	}

	public function buildCart()
	{
		$cartArray = array();
		if(!empty($_SESSION['cart'])) {
			$arrayID = array();
			foreach ($_SESSION['cart'] as $id => $item) {
				array_push($arrayID, $id);
			}
			$this->db->select('*')->from('products')->where_in('products.id', $arrayID);
			$query = $this->db->get();
			$products = $query->result_array();
			foreach ($_SESSION['cart'] as $id => $item) {
				foreach ($products as $key => $product) {
					if($id == $product['id']) {
						$cartArray[] = array_merge($product, $item);
						// break;
					}
				}
			}
		}
		return $cartArray;
	}

}