<?php
session_start();

	include("includes/db.class.php");
	include("includes/setting.conf.php");

	$db = new DB();
	$db->conectar();
 	
 	$username = $_POST['usuario'];
	$password = $_POST['password'];

	// COMPROBAR SEGURRIDAD CON DISITNTAS FUNCIONES
	// mysql_real_escape_string() stripcslashes() eregi()

		$sql = pg_query("SELECT * FROM usuarios WHERE usuario = '$username' and password = '$password'");
		 if (pg_num_rows($sql) >= 1) { 

			$_SESSION['loggedin'] = true;
			$_SESSION['usuario'] = $username;

			?>
			<meta http-equiv="refresh" content="0">
			<?

			} else { 
			echo "<center><font color=red>Username o Password estan incorrectos.</font></center><br>";
		}

?>