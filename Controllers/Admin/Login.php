<?php 
namespace Controllers\Admin;
use Controller\Controller;
use Model\DB;
class Login extends Controller
{
	public function login()
	{
		$this->display('Admin/Login/login');
	}
	public function login_do()
	{
		$db = new DB();
		$data = $db ->select("select username,password from Admin_login where username = '$_POST[username]' and password = '$_POST[password]'");
		if ($data) {
				echo "<script>alert('登陆成功');parent.location.href='index.php?c=Index&a=index'</script>";
			}else{
				echo "<script>alert('登陆失败');parent.location.href='index.php?c=Login&a=login'</script>";
		}
	}
}