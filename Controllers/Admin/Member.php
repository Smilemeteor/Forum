<?php 
namespace Controllers\Admin;
use Controller\Controller;
use Model\DB;
class Member extends Controller
{
	//会员列表
	public function member_list()
	{
		$this->display('Admin/Member/member_list');
	}
	//添加会员
	public function member_add()
	{
		$this->display('Admin/Member/member_add');
	}
	//删除的会员
	public function member_del()
	{
		$this->display('Admin/Member/member_del');
	}
	//等级管理
	public function member_level()
	{
		$this->display('Admin/Member/member_level');
	}
	//积分管理
	public function member_scoreoperation()
	{
		$this->display('Admin/Member/member_scoreoperation');
	}
	//浏览记录
	public function member_record_browse()
	{
		$this->display('Admin/Member/member_record_browse');
	}
	//下载记录
	public function member_record_download()
	{
		$this->display('Admin/Member/member_record_download');
	}
	//分享记录
	public function member_record_share()
	{
		$this->display('Admin/Member/member_record_share');
	}

}