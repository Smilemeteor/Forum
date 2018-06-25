<?php 
namespace Controllers\Admin;
use Controller\Controller;
use Model\DB;
class Article extends Controller
{
	//文章管理
	public function article_List()
	{
		$db = new DB();
		$data = $db->show('article');
		//print_r($data);die;
		$this->assign('data',$data);
		$this->display('Admin/Article/article_List');
	}
	//添加文章
	public function article_add()
	{
		$this->display('Admin/Article/article_add');
	}
	public function article_Add_do()
	{
	  $data['article_title']=isset($_POST['article_title'])?($_POST['article_title']):'';
      $data['article_title2']=isset($_POST['article_title2'])?($_POST['article_title2']):'';
      $data['type_id']=isset($_POST['type_id'])?($_POST['type_id']):'';
      $data['keywords']=isset($_POST['keywords'])?($_POST['keywords']):'';
      $data['article_abstract']=isset($_POST['article_abstract'])?($_POST['article_abstract']):'';
      $data['article_author']=isset($_POST['article_author'])?($_POST['article_author']):'';
      $data['sources']=isset($_POST['sources'])?($_POST['sources']):'';
      $data['allowcomments']=isset($_POST['allowcomments'])?($_POST['allowcomments']):'';
      $data['datetime']=time();

		$db = new DB();
		$arr = $db->insert('article',$data);
		if ($arr) {
			echo "<script>alert('添加成功');parent.location.href='?c=Index&a=index'</script>";
		} else {
			echo "<script>alert('添加失败');parent.location.href='?c=Index&a=index'</script>";
		}
	}
	//详细
	public function article_Show()
	{
		$id = $_GET['id'];
		// print_r($id);die;
		$db = new DB();
		$data = $db->one('article',"`article_id`='$id'");
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
		$data = $db->delete('article',"`article_id`='$id'");
		if ($data) {
			echo "<script>alert('删除成功');parent.location.href='?c=Index&a=index'</script>";
		}else{
			echo "<script>alert('删除失败');parent.location.href='?c=Index&a=index'</script>";
		}
	}
	//修改
	public function article_Upd()
	{
		$id = $_GET['id'];
		$db = new DB();
		$data = $db->one('article',"`article_id`='$id'");
		$this->assign('data',$data);
		$this->display('Admin/Article/article_upd');
	}
	public function article_Upd_do()
	{
		$id = $_POST['id'];
		$db = new DB();
		// $data = $db -> upd('update article set `article_title`='$article_title',`article_title2`='$article_title2',`type_id`='$type_id',`keywords`='$keywords',`article_abstract`='$article_abstract',`article_author`='$article_author',`sources`='$sources',`allowcomments`='$allowcomments' where article_id=$id');
		// if ($data) {
		// 	echo "<script>alert('修改成功');parent.location.href='?c=Index&a=index'</script>";
		// }else{
		// 	echo "<script>alert('修改失败');parent.location.href='?c=Index&a=index'</script>";
		// }
	}
}