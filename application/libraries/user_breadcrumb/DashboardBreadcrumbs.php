<?php
defined('BASEPATH') or exit('Access denied');

class DashboardBreadcrumbs 
{
	private $breadcrumbs = [];
	private $callback = [];
	private $itemBread = [];

	private $full_tag_open = '<div class="kt-subheader__breadcrumbs">';
	private $full_tag_close = '</div>';
	private $item_tag_open = '<span class="kt-subheader__breadcrumbs-separator"></span>';
	private $item_tag_close = '';
	// private $link_tag_open = '<a href="#">';
	// private $link_tag_open = '</a>';


	public function __construct($config = [])
	{
		foreach ($config as $key => $value) {
			switch ($key) {
				case 'full_tag_open':
				$this->full_tag_open = $value;
				break;

				case 'full_tag_close':
				$this->full_tag_close = $value;
				break;

				case 'item_tag_open':
				$this->item_tag_open = $value;
				break;

				case 'item_tag_close':
				$this->item_tag_close = $value;
				break;	

				default:

				break;
			}
		}

	}

	protected function call(string $name, $params = null)
	{
		if(!isset($this->callback[$name])) {
			die('breadcrumbs does not exits');
		}
		$this->callback[$name]($this, $params);
	}

	public function test()
	{
		// var_dump($this->breadcrumbs);
		
		// echo $this->breadcrumbs['home']['parent'];
		$this->render('cuahang');
		$this->itemBread = array_reverse($this->itemBread, true);
		foreach ($this->itemBread as $key => $value) {
			echo $value;
		}
	}

	public function for(string $name, callable $callback)
	{
		if(isset($this->callback[$name])) {
			die('breadcrumb existed');
		}
		$this->callback[$name] = $callback;
	}

	public function parent($name, $data = [])
	{
		$this->callback[$name]($this, $data);
	}

	public function render(string $name, $data = [])
	{
		$this->call($name, $data);
		// $this->itemBread[] = '<li class="breadcrumb-item active" aria-current="page"> ' . $this->breadcrumbs[$name]['title'] . '</li>'; 
		// $this->renderItem($this->breadcrumbs[$name]['parent']);
		// $this->itemBread = array_reverse($this->itemBread, true);
		$view = $this->full_tag_open;
		$view .= '<a href="' . route('user.dashboard') . '" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a><span class="kt-subheader__breadcrumbs-separator"></span>';
		foreach ($this->breadcrumbs as $key => $value) {
			if($key === (count($this->breadcrumbs) - 1)) {
				$view .= '<a class="kt-subheader__breadcrumbs-link active"> ' . $value['title'] . '</a>';
			} else {
				$view .= '<a class="kt-subheader__breadcrumbs-link" href="' . $value['url'] . '"> ' . $value['title'] . '</a><span class="kt-subheader__breadcrumbs-separator"></span>';
			}
		}
		$view .= $this->full_tag_close;
		return $view;
	}

	private function getItem($breads)
	{
		
		$this->renderItem($breads['parent']);
		return $items;
	}

	private function renderItem($parent)
	{
		if(! empty($parent) && isset($this->breadcrumbs[$parent])) {
			$this->itemBread[] = $this->item_tag_open . '<a class="kt-subheader__breadcrumbs-link" href=" ' . $this->breadcrumbs[$parent]['url'] . ' ">' . $this->breadcrumbs[$parent]['title'] . '</a>' . $this->item_tag_close;
			$this->renderItem($this->breadcrumbs[$parent]['parent']);
		}
	}

	public function push(string $title, string $url = '', array $data = [])
	{
		$this->breadcrumbs[] = compact('title','url');
	}
}