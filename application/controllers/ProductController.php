<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProductController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (file_exists('application/libraries/config-breadcrumbs.php')) {
			include ('application/libraries/config-breadcrumbs.php'); 
		} 
	}

	public function index($slug)
	{
		parent::__construct();
		$slug = htmlspecialchars (trim($slug));
		$query = $this->db->get_where('products', array('slug' => $slug, 'is_active' => 1));
		$product = $query->row();
		$this->dataContent['breadcrumbs'] = $this->breadcrumbs->render('product', $product);
		if(!empty($product)) {
			$this->dataContent['product'] = $product;
			$footer['pathCustomJS'] = 'product_details/myJS';
			$this->footer_data = $footer;
			$this->render('product_details');
		} else {
			show_404();
		}
	}
}