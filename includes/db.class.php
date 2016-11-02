<?php
 	class DB {
	public $host = "10.3.184.21"; //host
	public $user = "postgres"; //user bd postgress
	public $pwd  = "seremi9"; //pass db postgress
	public $db = "IRSO"; //este esta haciendo referencia a la bd de mysql por lo q en local funciona (haciendo referencia a alguna db q exista)  
 	public $consulta;

	public function conectar()
	{
		mysql_connect($this->host, $this->user, $this->pwd);
		mysql_select_db($this->db) or die("Fallo la Conexión"); //este error esta arrojando
		pg_connect("host=10.3.184.21 port=5432 dbname=IRSO user=postgres password=seremi9"); 
	}

	public function desconectar() 
	{
		mysql_close();
	}
	
	public function leer_un_dato($consulta, $campo)
	{
        $query = pg_fetch_array(pg_query($consulta));
        return $query[$campo];
	}
	}
?>
