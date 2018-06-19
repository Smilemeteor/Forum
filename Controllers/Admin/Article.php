<?php 
namespace Controllers\Admin;
use Controller\Controller;
use Model\DB;
class Article extends Controller
{
	//资讯管理
	public function article_list()
	{
		$db = new DB();
		$data = $db->show('article_list');
		//print_r($data);die;
		$this->assign('data',$data);
		$this->display('Admin/Article/article_list');
	}
	//添加资讯
	public function article_add()
	{
		$this->display('Admin/Article/article_add');
	}
}