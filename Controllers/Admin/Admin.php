<?php 
namespace Controllers\Admin;
use Controller\Controller;
use Model\DB;
class Admin extends Controller
{
	//添加管理
	public function admin_add()
	{
		$this->display('Admin/Admin/admin_add');
	}
	//修改密码
	public function admin_assword_edit()
	{
		$this->display('Admin/Admin/admin_assword_edit');
	}
	//管理员列表
	public function admin_list()
	{
		$this->display('Admin/Admin/admin_list');
	}
	//权限管理
	public function admin_permission()
	{
		$this->display('Admin/Admin/admin_permission');
	}
	//角色管理
	public function admin_role()
	{
		$this->display('Admin/Admin/admin_role');
	}
	//添加角色
	public function admin_role_add()
	{
		$this->display('Admin/Admin/admin_role_add');
	}
}