<?php 
namespace Controllers\Home;
use Controller\Controller;
use Model\DB;
use Model\Page;
class Index extends Controller
{
	public function search()
	{
			
		$this->display('Home/Index/search');
	}

	public function index()
	{
		$db = new DB();
		$data=$db->show('article');
		$this->assign('data',$data);
		$this->display('Home/Index/index');
	}
	public function show()
	{
		$id = $_GET['id'];
		// print_r($id);die;
		$db = new DB();
		$data = $db->one('article',"`article_id`='$id'");
		$this->assign('data',$data);
		$this->display('Home/Index/show');
	}
	public function page()
	{
		@$db = mysql_connect('localhost', 'root', 'root') or
		die("Could not connect to database.");//连接数据库
		mysql_query("set names 'utf8'");//输出中文
		mysql_select_db('test');    //选择数据库
		$sql = "select * from `caiji`"; //一个简单的查询
		$page = new Page();
		$data_page =$page->Page('',$data,$_GET['page'],5,"?page=");		
		$this->assign('data_page',$data_page);
		$this->assign('data_list',$data_list);
		$this->display('Home/Index/page');
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