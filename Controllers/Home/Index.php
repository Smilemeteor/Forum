<?php 
namespace Controllers\Home;
use Controller\Controller;
use Model\DB;
class Index extends Controller
{
	public function index()
	{
		$db = new DB();
		$data=$db->show('Home_index');
		$this->assign('data',$data);
		$this->display('Home/Index/index');
	}
	public function show()
	{
		$id = $_GET['id'];
		// print_r($id);die;
		$db = new DB();
		$data = $db->select("select * from home_index where `dz_id`='$id'");
		$this->assign('data',$data);
		$this->display('Home/Index/show');
		//echo "404;拒绝访问！";
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