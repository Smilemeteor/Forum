<?php 
namespace Model;
class DB
{
	public $pdo;   

	public function __construct()
	{
		$db = C('db');
		$this->pdo=new \pdo('mysql:host='.$db['host'].';dbname='.$db['dbname'],$db['username'],$db['password']);
	}

    //分页？
    
    public function upd($sql)
    {
        $res = $this->pdo->query($sql);
        return $res->exec();
    }

	public function select($sql)
	{
		$res = $this->pdo->query($sql);
		return $res->fetchAll();
	}

	public function login($sql)
	{
		$res = $this->pdo->query($sql);
		return $res->fetchAll();
	}

    public function inserts($sql)
    {
        $res = $this->pdo->query($sql);
        return $res->exec();
    }
	
	public function insert($table_name,$parameters)
    {
        $sql = 'insert into '.$table_name;
        
        $filed = '(';
        $value = " values (";
        foreach ($parameters as $key => $val) {
            $filed .= $key.',';
            $value .= "'".$val."'".",";
         }

        $sql .= trim($filed, ',').')'.trim($value, ',').')';
        return $this->pdo->exec($sql);
    }

    public function delete($table_name,$where)
    {

       $sql="delete from ".$table_name." where ".$where;

       $res=$this->pdo->exec($sql);

       return $res;
    }

    public function show($table_name)
    {
        $sql = "select * from " . $table_name."";

        $res=$this->pdo->query($sql)->fetchAll();

        return $res;
    }

    public function one($table_name,$where)
    {
        $sql = "select * from " . $table_name." where ".$where;

        $res=$this->pdo->query($sql)->fetchAll();

        return $res;
    }

    // public function upd($sql)
    // {
    //     $res = $this->pdo->query($sql);
    //     return $res->exec();
    // }

    public  function upload($file)
    {
        //判断文件类型
        $arr=array('image/jpeg','image/jpg','image/gif','image/png');
        if(!in_array($file['type'],$arr))
        {
            echo "上传文件类型错误";die;
        }
        //判断文件大小
        if($file['size']>1024*1024)
        {
            echo "上传文件过大";die;
        }
        //判断文件上传错误信息
        switch($file['error'])
        {
            case 1:
              echo "上传文件超过了php.ini中的最大值";die;
            case 2:
              echo "上传文件超过了form表单的设置大小";die;
            case 3:
              echo "上传文件部分被上传";die;
            case 4:
              echo "没有文件被上传";die;
        }
        //重命名
        $file_name=time().rand(0,10000);
        //截取后缀
        $file_hz=substr($file['name'],strrpos($file['name'],'.'));
        //判断文件夹是否存在
        if(!file_exists('./public/upload/'))
        {
            mkdir('./public/upload/');
        }
        //拼接路径
        $path='./public/upload/'.$file_name.$file_hz;
        //判断移动文件  
        if(move_uploaded_file($file['tmp_name'],$path))
        {
           return $path;
        }else{
            return false;
        }
    }
}