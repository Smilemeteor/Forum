<?php 
namespace Controllers\Admin;
use Controller\Controller;
use Model\DB;
class Product extends Controller
{
	//产品管理
	public function product_list()
	{
		$this->display('Admin/Product/product_list');
	}
	//添加产品
	public function product_category()
	{
		$this->display('Admin/Product/product_category');
	}
	public function product_category_add()
	{
		$this->display('Admin/Product/product_category_add');
	}
	//品牌管理
	public function product_brand()
	{
		$this->display('Admin/Product/product_brand');
	}
	//产品添加
	public function product_add()
	{
		$this->display('Admin/Product/product_add');
	}
}