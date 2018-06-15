<?php 
namespace Controllers\Admin;
use Controller\Controller;
use Model\DB;
class Index extends Controller
{
	public function index()
	{
		$this->display('Admin/Index/index');
	}
	public function welcome()
	{
		$this->display('Admin/Index/welcome');
	}
	//评论区的意见反馈
	public function feedback_list()
	{
		$this->display('Admin/Index/feedback_list');
	}
}