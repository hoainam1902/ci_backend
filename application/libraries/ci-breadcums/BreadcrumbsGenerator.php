<?php
defined('BASEPATH') or exit('');
class BreadcrumbsGenerator 
{
	protected $breadcrumbs;

	protected $callback = [];


	public function register()
	{

	}

	public function for()
	{

	}

	public function parent(string $name,array $params)
	{
		if(! isset($this->callback[ $name ])) {
			die('khong ton tai parent');
		}
		$this->callback[ $name ]($this, $params)
	}

	public function push(string $title, string $url = null, array $data = [])
	{
		$this->breadcrumbs->push();
	}

}