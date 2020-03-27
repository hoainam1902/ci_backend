<?php
defined('BASEPATH') OR exit('No script access allow direct');
Class MY_Controller extends MX_Controller 
{

	protected $dataContent = array();
	protected $head_data = array();
	protected $footer_data = array();
	protected $menu_data = array();
	protected $extraJS = array();
	protected $extraCSS = array();
	protected $data = array();
	protected $template;

	public function __construct() {
		parent::__construct();
		$this->load->model('Publicmodels');
		// $this->setTemplate($this->loadTemplate());
		// $this->head['temp'] = $this->template;
		// $this->data_head['headmenu'] = $this->getHeadMenu();
	}

	public function setTemplate($val) {
		$this->template = 'templates/'.$val.'/';
	}

	// public function loadTemplate() {
	// 	return $this->Options_model->getOption('template');
	// }

	public function render($view) {
		// $this->head['allCategories'] = $this->Public_model->getShopCategories();
		// $this->load->view('partials/head.php', $this->data_head);
		$this->data['sectionContent'] = $view;
		$this->data['head_data'] = $this->head_data;
		$this->data['dataContent'] = $this->dataContent;
		$this->data['footer_data'] = $this->footer_data;
		$this->data['extraJS'] = $this->extraJS;
		$this->data['extraCSS'] = $this->extraCSS;
		$this->load->view('layouts/main', $this->data);
		// $this->load->view('partials/footer.php', $this->data_footer);
	}

	private function getHeadMenu() {
		$headMenu = $this->Public_model->getHeadMenu();
		foreach ($headMenu as $key => $head) {
			if(!empty($head['category_id'])) {
				$cate = $this->Public_model->getCateMenu($head['category_id']);
				if(!empty($cate)) {
					$headMenu[$key] = array_merge($head,$cate);
				} else {
					unset($headMenu[$key]);
				}
				continue;
			}
			if(!empty($head['product_id'])) {
				$product = $this->Public_model->getProductMenu($head['product_id']);
				if(!empty($product)) {
					$headMenu[$key] = array_merge($head,$product);
				} else {
					unset($headMenu[$key]);
				}
			}
		}
		return $headMenu;
	}
}

Class MY_DashboardController extends MX_Controller
{
	protected $data = array();
	protected $settings = array();

	public function __construct()
	{
		parent::__construct();
		if(!$this->checkLogin()) {
			header('Location: ' . route('user.login'));
			exit();
		}
		$this->data['title'] = '';
		$this->load->library('user_breadcrumb/DashboardBreadcrumbs');
		if (file_exists(APPPATH . '/libraries/user_breadcrumb/config-breadcrumbs.php')) {
			include (APPPATH . '/libraries/user_breadcrumb/config-breadcrumbs.php'); 
		}
	}

	public function render($viewPath)
	{
		$this->data['view'] = $viewPath;
		// $this->data['dataBody'] = $data;
		$this->load->view('layout/main', $this->data);
	}

	public function checkLogin()
	{
		if(isset($_SESSION['userInfo']) && !empty($_SESSION['userInfo'])) {
			return true;
		}
		return false;
	}
}

class MY_AdminController extends MX_Controller
{

	protected $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PublicAdminModel');
		if(!$this->PublicAdminModel->isLogin()) {
			header('Location: ' . route('admin.login'));
			exit();
		}
		$this->data['title'] = '';
		$this->load->library('admin_breadcrumb/DashboardBreadcrumbs');
		if (file_exists(APPPATH . '/libraries/admin_breadcrumb/config-breadcrumbs.php')) {
			include (APPPATH . '/libraries/admin_breadcrumb/config-breadcrumbs.php'); 
		}
	}

	public function render($viewPath)
	{
		$this->data['view'] = $viewPath;
		$this->load->view('layout/main', $this->data);
	}

	public function isAdminLogin()
	{

	}
}
