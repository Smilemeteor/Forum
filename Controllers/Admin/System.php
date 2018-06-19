<?php 
namespace Controllers\Admin;
use Controller\Controller;
use Model\DB;
class System extends Controller
{
	//系统设置
	public function system_base()
	{
		$this->display('Admin/System/system_base');
	}
	//栏目管理
	public function system_category()
	{
		$this->display('Admin/System/system_category');
	}
	//数据字典
	public function system_data()
	{
		$this->display('Admin/System/system_data');
	}
	//屏蔽词
	public function system_shielding()
	{
		$this->display('Admin/System/system_shielding');
	}
	//系统日志
	public function system_log()
	{
		$this->display('Admin/System/system_log');
	}
}