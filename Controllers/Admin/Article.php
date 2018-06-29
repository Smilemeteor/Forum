<?php 
namespace Controllers\Admin;
use Controller\Controller;
use Model\DB;
class Article extends Controller
{
	public function article_stop()
	{	
		$id = $_POST['id'];
		$name = $_POST['name'];
		$db = new DB();
		if ($name==1) 
		{
			$res = $db->upddian('article','is_show=0',"`article_id`='$id'");
		}
		else
		{
			$res = $db->upddian('article','is_show=1',"`article_id`='$id'");
		}
		if ($res)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}

	//搜索
	public function article_find()
	{
		$name = $_POST['name'];
		$db = new DB();
		$data = $db->search('article',$name);
		$res=$db->count('article');
		$this->assign('data',$data);
		$this->assign('res',$res);
		$this->display('Admin/Article/article_List');
	}


	//文章管理
	public function article_List()
	{
		$db = new DB();
		$data = $db->show('article');
		$res=$db->count('article');
		//print_r($data);die;
		$this->assign('data',$data);
		$this->assign('res',$res);
		// print_r($res);die;
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
		$data['article_content']=isset($_POST['article_content'])?($_POST['article_content']):'';
		$data['datetime']=time();
		$data['is_show']='0';
		$db = new DB();
		$arr = $db->insert('article',$data);
		if (!empty($arr)) {
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
		// echo "<pre/>";
		// print_r($data);
		$this->assign('data',$data);
		$this->display('Admin/Article/article_show');
	}

	public function article_Dels()
	{
		$id=$_GET['id'];
		$db = new DB();
		$res = $db->delete('article',"`article_id`='$id'");
		if ($res) {
			$data['status']=0;
		}else{
			$data['status']=1;
		}
		echo json_encode($data);
	}

	public function article_Del_All()
    {
        $id = $_GET['id'];
        
        $db = new DB(); 
        $arr = explode(",",$id);


        for($i = 0;$i<count($arr);$i++) 
        {
                $id = $arr[$i];
                $res = $db->delete('article',"`article_id`='$id'");
        }
        if($res)
        {
            echo 1;
        }
        else
        {
            echo 2;
        }
    }

	//修改
	public function article_Upd()
	{
		$id = $_GET['id'];
		// var_dump($id);die;
		$db = new DB();
		$data = $db->one('article',"`article_id`='$id'");
		// var_dump($data);die;
		$this->assign('data',$data);
		$this->display('Admin/Article/article_upd');
	}
	public function article_Upd_do()
	{
		$array = $_POST;
		$id=$array['article_id'];
		$db = new DB();
		$res = $db->update('article',$array,"`article_id`='$id'");
		if ($res) {
			echo "<script>alert('修改成功');parent.location.href='?c=Index&a=index'</script>";
		}else{
			echo "<script>alert('修改失败');parent.location.href='?c=Index&a=index'</script>";
		}
	}
}