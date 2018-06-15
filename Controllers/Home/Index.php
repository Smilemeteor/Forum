<?php 
namespace Controllers\Home;
use Controller\Controller;
use Model\DB;
class Index extends Controller
{
	public function index()
	{
		$this->display('Home/Index/index');
	}
	//段子
	public function duanzi()
	{
		$this->display('Home/Index/duanzi');
	}
	//版本跳转
	public function yizpi1()
	{
		$this->display('Home/Index/yizpi1');
	}
	//干货
	public function ganhuo()
	{
		$this->display('Home/Index/ganhuo');
	}
	//关于
	public function about()
	{
		$this->display('Home/Index/about');
	}
}