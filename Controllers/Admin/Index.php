<?php 
namespace Controllers\Admin;
use Controller\Controller;
use Model\DB;
class index extends Controller
{
	public function index()
	{
		$this->display('Admin/Index/index');
	}
	public function welcome()
	{
		$this->display('Admin/Index/welcome');
	}
}