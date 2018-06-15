<?php 
namespace Controller\Admin;
use Controller\Controller;
class Article extends Controller
{
	public function article_list()
	{
		$this->display('Article/article_list');
	}
	public function article_add()
	{
		$this->display('Article/article_add');
	}
	public function article_class()
	{
		$this->display('Article/article_class');
	}
	public function article_class_edit()
	{
		$this->display('Article/article_class_edit');
	}
}