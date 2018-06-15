<?php 
namespace Controllers\Admin;
use Controller\Controller;
use Model\DB;
class Picture extends Controller
{
	//图片管理
	public function picture_list()
	{
		$this->display('Admin/Picture/picture_list');
	}
	//添加图片
	public function picture_add()
	{
		$this->display('Admin/Picture/picture_add');
	}
}