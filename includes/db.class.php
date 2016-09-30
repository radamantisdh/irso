<?php
 	class DB {
	public $host = "localhost";
	public $user = "root";
	public $pwd  = "admin";
	public $db = "irso";
	public $consulta;

	public function conectar()
	{
		mysql_connect($this->host, $this->user, $this->pwd);
		mysql_select_db($this->db) or die("Fallo la Conexión");
		pg_connect("host=localhost port=5432 dbname=IRSO user=postgres password=postgresql");
	}

	public function desconectar() 
	{
		mysql_close();
	}
	
	public function leer_un_dato($consulta, $campo)
	{
        $query = mysql_fetch_array(mysql_query($consulta));
        return $query[$campo];
	}
	}
?>