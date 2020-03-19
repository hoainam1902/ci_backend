<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CartController extends MY_Controller
{
	private $cartItems = array();

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->dataContent['cartArray'] = $this->PublicModels->buildCart();
		// $footer['extraJS'] = 'js/custom/cart.js';
		$footer['pathCustomJS'] = 'cart/cartJS';
		$this->footer_data = $footer;
		$this->render('cart');
	}

	public function count()
	{
		echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
	}

	public function addCartItem()
	{
		// var_dump($_POST);
		if(!empty($_POST['id'])) {
			if(isset($_SESSION['cart'][$_POST['id']])) {
				$_SESSION['cart'][$_POST['id']]['qty'] = $_SESSION['cart'][$_POST['id']]['qty'] + $_POST['qty'];
				// echo 'true';
				echo json_encode(array('status' => 'true', 'count' => count($_SESSION['cart'])));
				return;
			}
			$_SESSION['cart'][$_POST['id']] = array('qty' => $_POST['qty']);
			echo json_encode(array('status' => 'true', 'count' => count($_SESSION['cart'])));
			return;
		}
		echo json_encode(array('status' => 'false', 'count' => 0));
	}

	public function qtyPlus()
	{

	}

	public function emptyCart()
	{
		$this->session->unset_userdata('cart');
	}

	public function removeCartItem(int $id)
	{
		if(isset($_SESSION['cart'][$id])) {
			unset($_SESSION['cart'][$id]);
			$messageArray = array('success' => 'Đã xóa 1 sản phẩm trong giỏ hàng. ');
			$this->session->set_flashdata('message', $messageArray);
		}
		header('Location: '. route('cart'));
	}

	public function update()
	{
		if(isset($_POST['quantity'])) {
			foreach ($_POST['quantity'] as $id => $quantity) {
				$_SESSION['cart'][$id]['qty'] = $quantity;
			}
			$messageArray = array('success' => 'Đã cập nhật giỏ hàng. ');
			$this->session->set_flashdata('message', $messageArray);
			header('Location: '. route('cart'));
		}
	}

}
