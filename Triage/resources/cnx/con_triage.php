<?php

class Model{
	private $db;
    public function __CONSTRUCT(){
        try{
  			$this->db = new PDO('mysql:host=localhost;dbname=db_triage', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",PDO::MYSQL_ATTR_LOCAL_INFILE => true)); 
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
	
	public function consultaDatos($consulta,$retorno){
		try{
			$sql=$consulta;
			$stm = $this->db->prepare($sql);                      
			$stm->execute();
			if($retorno == 1)
				return  $stm->fetch(PDO::FETCH_ASSOC);
			else if($retorno == 2)
				return  $stm->fetchAll(PDO::FETCH_ASSOC);
			else if ($retorno == 3)
				return  $stm->rowCount();
		}catch (Exception $e){
			throw new Exception($e->getMessage(), 112);
		}
    }
}
?>