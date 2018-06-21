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
	public function article_Add_do()
	{
		$db = new DB();
		$array=$_POST;
		$data = $db->insert('article_list',$array);
		if ($data) {
			echo "<script>alert('留言成功');parent.location.href='?c=Article&a=article_list'</script>";
		} else {
			echo "<script>alert('留言失败');parent.location.href='?c=Article&a=article_add'</script>";
		}
	}
	//详细
	public function article_Show()
	{
		$id = $_GET['id'];
		// print_r($id);die;
		$db = new DB();
		$data = $db->one('article_list',"`article_id`='$id'");
		echo "<pre/>";
		print_r($data);
		// $this->assign('data',$data);
		// $this->display('Home/Index/show');
	}
	//单条删除
	public function article_Del()
	{
		$id = $_GET['id'];
		$db = new DB();
		$data = $db->delete('article_list',"`article_id`='$id'");
		if ($data) {
			echo "<script>alert('删除成功');parent.location.href='?c=Index&a=index'</script>";
		}else{
			echo "<script>alert('删除失败');parent.location.href='?c=Index&a=index'</script>";
		}
	}
}