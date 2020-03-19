<?php
defined('BASEPATH') OR exit('No script access allow direct');
class ProductModel extends CI_Model
{
	private $tableName = 'Products';
	private $products = [];
	private $query = '';
	private $callback = [];

	public function __construct()
	{
		parent::__construct();
	}

	public function selectAllProduct()
	{
		$this->db->reset_query();
		$this->db->select('*')->from('products');
		return $this;
	}

	public function selectAllProductOfBrand($brand)
	{
		$this->db->reset_query();
		$this->db->select('products.*,category.name as category_name')->from('products')->join('category_product', 'products.id = category_product.product_id')->join('category', 'category.id = category_product.category_id')->where('category.slug', $brand);
		return $this;
	}

	public function selectAllBrand()
	{
		$query = $this->db->get('category');
		return $query;
	}

	public function getProduct()
	{
		$temp = $this->db->get();
		$this->products = $temp->result();
		return $this->products;
	}

	public function order_by(string $column,string $sort)
	{
		$this->db->order_by($column, $sort);
		return $this;
	}

	public function limit(int $number, $page = 0)
	{
		$this->db->limit($number, $page);
		return $this;
	}

	public function countAllProduct()
	{
		 return $this->db->count_all_results($this->tableName);
	}

	public function countAllResult()
	{
		return $this->db->count_all_results();
	}
}