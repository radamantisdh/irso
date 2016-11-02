//este codigo hace funcional la página en el host pero al momento de querer guardar no hace nada y me tira los errores de campos vacios.
<?php
	class DB {

	public $consulta;
	public function conectar()
	{
	$host = "10.3.184.21";
	$port = "5432";
	$db = "IRSO";
	$user = "postgres"; //usuario de postgres
	$pwd = "seremi9"; //password de usuario de postgres

	$conn_string = "host=". $host . " port=" . $port . " dbname= " . $db . " user=" . $user . " password=" . $pwd;

	$dbconn = pg_connect($conn_string) or die;
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
