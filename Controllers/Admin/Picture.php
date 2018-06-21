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
	public function picture_Add_do()
	{
		$db = new DB();
		$array = $_POST;
		$data = $db->insert('picture',$array);	
		if ($data) {
			echo "<script>alert('添加成功');parent.location.href='?c=Index&a=index'</script>";
		} else {
			echo "<script>alert('添加失败');parent.location.href='?c=Picture&a=picture_add'</script>";
		}
	}

}