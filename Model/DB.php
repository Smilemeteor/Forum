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
     public function add($table_name,$parameters)
    {
        $sql = 'insert into '.$table_name;

        $filed = '(';
        $value = " values (";
        foreach ($parameters as $key => $val) {
            $filed .= $key.',';
            $value .= "'".$val."'".",";
         }

        $sql .= trim($filed, ',').')'.trim($value, ',').')';
 
        return $this->pdo()->exec($sql);

    }


    public function findAll($pdo,$table_name)
    {
        $sql = "select * from " . $table_name . "";

      $data=$pdo->query($sql)->fetchAll();
      $arr = array();
          foreach ($data as $key => $value) {
              $arr[$key]['user'] = $data[$key]['user'];
              $arr[$key]['title'] = $data[$key]['title'];
              $arr[$key]['content'] = $data[$key]['content'];
              $arr[$key]['id'] = $data[$key]['id'];
               $arr[$key]['date'] = $data[$key]['date'];
          }
          return $arr;
      
    }

    public function delete($pdo,$table_name,$where)
    {

       $sql="delete from ".$table_name."where='$where'";

       $res=$pdo->exec($sql);

       return $res;
    }

    public function show($table_name)
    {
        $sql = "select * from " . $table_name."";

        $res=$this->pdo->query($sql)->fetchAll();

        return $res;
    }

}