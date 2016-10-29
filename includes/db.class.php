<?php
 	class DB {
	public $host = "localhost";
	public $user = "root";
	public $pwd  = "admin";
	public $db = "irso"; //hace referencia a la bd de mysql
	public $consulta;

	public function conectar()
	{
		mysql_connect($this->host, $this->user, $this->pwd);
		mysql_select_db($this->db) or die("Fallo la Conexión");
		pg_connect("host=localhost port=5432 dbname=IRSO user=postgres password=postgresql"); //abro conexion a postgres
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