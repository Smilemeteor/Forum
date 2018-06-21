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

    // public function getOne($resumn,$tablename,$where="1"){
    //     $sql = "select $resumn from $tablename where $where";
    //     $rs = $this->pdo->query($sql);
    //     $rs->setFetchMode(PDO::FETCH_ASSOC);
    //     $res = $rs->fetchAll();
    //     return  $res;
    // }
}