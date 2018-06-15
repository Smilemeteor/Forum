<?php 
namespace Controllers\Admin;
use Controller\Controller;
use Model\DB;
class Article extends Controller
{
	public function article_list()
	{
		$this->display('Admin/Article/article_list');
	}
	public function welcome()
	{
		$this->display('Admin/Article/welcome');
	}
}