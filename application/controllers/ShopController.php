<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ShopController extends MY_Controller
{
	private $products = [];
	private $per_page = 6;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Productmodel');
		$this->load->library('pagination');
	}
	public function index()
	{
		$current_page = (isset($_GET['page']) && $_GET['page'] > 0) ? $_GET['page'] : 1;
		// $countProduct = $this->ProductModel->countAllProduct();
		// parent::__construct();
		$this->Productmodel->selectAllProduct();
		$countProduct = $this->Productmodel->countAllResult();
		$this->Productmodel->selectAllProduct();
		// $products = $this->ProductModel->selectAllProduct()->getProduct();
		// $queryProduct = $this->PublicModels->selectAllProduct();

		foreach ($_GET as $key => $value) {
			switch ($key) {
				case 'category':
				$brandName = htmlspecialchars(trim($value));
				$this->Productmodel->selectAllProductOfBrand($brandName);
				$countProduct = $this->ProductModel->countAllResult();
				$this->Productmodel->selectAllProductOfBrand($brandName);
				break;

				case 'sort':
				switch ($value) {

					case 'priceasc':
					$products = $this->Productmodel->order_by('price', 'ASC');
					// $queryProduct = $queryProduct->order_by('price', 'ASC');
					break;

					case 'pricedesc':
					$products = $this->Productmodel->order_by('price', 'DESC');
					break;
					
					case 'date':
					$products = $this->Productmodel->order_by('created_at', 'ASC');
					break;
				}
				break;

				default:
				
				break;
			}
		}
		// $countProduct = $this->ProductModel->countAllResult();
		$this->dataContent['products'] = $this->Productmodel->limit($this->per_page, ($current_page - 1) * $this->per_page)->getProduct();
		// $this->dataContent['products'] = $queryProduct->result();
		$queryBrand = $this->Productmodel->selectAllBrand();
		$this->dataContent['categories'] = $queryBrand->result();

		$config['base_url'] = route('shop');
		
		$config['attributes'] = array('class' => 'page-link');
		$config['total_rows'] = $countProduct;
		$config['per_page'] = $this->per_page;
		$config['reuse_query_string'] = TRUE;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config['first_link'] = 'First Page';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last Page';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '<';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

		$config['full_tag_open'] = '<nav aria-label="navigation" <ul class="pagination justify-content-end mt-50">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$this->dataContent['paging'] = $this->pagination->create_links();
		$this->render('shop');
	}

	private function showProductsOfBrand($brandName)
	{
		$brandName = htmlspecialchars(trim($brandName));
		$this->ProductModel->selectAllProductOfBrand($brandName);
		
	}



}