<?php

/*
 * this is a class to connect a the application with the database server
 * the principal technology is PDO Object.
*/
class DBConfig {

	var $host;
    	var $user;
    	var $pass;
    	var $db;
    	var $db_link;
    	var $conn = false;
    	public $error = false;
    	public $error_message;

    	public function config(){
        	$this->error = true;
    	}

	/*
 	*  bad name in the fuction 'conexion' break the code conventions and is a bad practice
  	*  because create a 'spanglish' ecosystem and add inneccesary dificulty.
  	*/
	function conexion($host='localhost',$user='root',$pass='12345678',$db='db_admin'){ 
	    	$this->error_message = "";
        	$this->host = $host;
        	$this->user = $user;
        	$this->pass = $pass;
        	$this->db = $db;
		$this->error_message = "";
        	try{	
			$this->db_link = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
			$this->db_link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->conn = true;
			return $this->db_link;
			echo "ok connect";
		}catch(PDOException $exception){
			echo $exception->getMessage();
			$this->error_message =$exception->getMessage();			
		} 
    	}

	/*
 	*  bad name in the fuction 'Consultas' break the code conventions and is a bad practice
  	*  because create a 'spanglish' ecosystem and add inneccesary dificulty. so and use Pascal Case
   	*  this code hasn't good practice and conteins variables without significative names.
  	*/
	public function Consultas($Query){
		$this->error_message = "";
		$this->rowsCant =0;
		$sql = $this->db_link->prepare($Query);
		try{
			if ($sql->execute()){
				$sql->setFetchMode(PDO::FETCH_ASSOC);		
				$records_query = $sql->fetchAll();
				$this->rowsCant = $sql->rowCount();
				if($sql->rowCount()>0) {
					return $records_query;	
				}
				else {
					return false;
				}
			}else{
				$this->error_message = "-captura manual del error".$this->error_message;
				return false;
			}
		}catch(PDOException $exception){
			$this->error_message =$exception->getMessage();
		}
	}

	/*
 	*  More spanglish 'Operaciones'
  	*/
	function Operaciones($Query){
		$this->error_message = "";
	    	$sql = $this->db_link->prepare($Query);	
	    	try{
			if ($sql->execute()){
		    		return true;
		    	}else{
		    		return false;
		    	}
	    	}catch(PDOException $exception){
			$this->error_message =$exception->getMessage();
		}	    
	}	

	/*
 	*  bad name in the fuction 'numero_de_filas' break the code conventions and is a bad practice
  	*  because create a 'spanglish' ecosystem and add inneccesary dificulty.
  	*/
	function numero_de_filas(){
		return $this->rowsCant;
	}

	/*
 	*  this is the unic function that has a good practice and follow the code conventions for php.
  	*/
    	function close() { 
        	if ($this->conn){
        		$this->db_link = null;
            		$this -> conn = false;
        	}
    	}
				
}
?>
