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
}