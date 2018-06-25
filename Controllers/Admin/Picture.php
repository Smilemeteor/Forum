<?php 
namespace Controllers\Admin;
use Controller\Controller;
use Model\DB;
class Picture extends Controller
{
	//图片管理
	public function picture_list()
	{
		$db = new DB();
		$data = $db->show('picture');
		$this->assign('data',$data);
		$this->display('Admin/Picture/picture_list');
	}
	//添加图片
	public function picture_add()
	{
		$this->display('Admin/Picture/picture_add');
	}
	//图片添加
	public function picture_Add_do()
	{
		$file=$_FILES["tpic"];
		$data['tpic']=$_FILES['tpic'];
		$data['picture_title']=$_POST['picture_title'];
		$data['picture_type']=$_POST['picture_type'];
		$data['picture_time']=time();
		$data['author']=$_POST['author'];
		$data['source']=$_POST['source'];
		$db=new DB();
		$res=$db->upload($data['tpic']); 
		$data['tpic']=substr($res,0);        
		$data=$db->insert('picture',$data);
		if($data)
		{
		echo "<script>alert('添加成功');location.href='index.php?c=Picture&a=picture_list'</script>";
		} else {
		echo "<script>alert('添加失败');location.href='index.php?c=Picture&a=picture_add'</script>";
		}    
	}
	public function picture_show()
	{
		$db = new DB();
		$data=$db->show('picture');
		$this->assign('data',$data);
		$this->display('Admin/Picture/picture_show');
	}
}