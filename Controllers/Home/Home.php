<?php 
namespace Controllers\Home;
use Controller\Controller;
use Model\DB;
class Home extends Controller
{
	public function index()
	{
		$this->display('Home/index');
	}
}