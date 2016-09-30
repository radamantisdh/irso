<?php
session_start();
	$_SESSION['loggedin'] = false;
	$_SESSION['usuario'] = "";
session_destroy();
include("includes/setting.conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="refresh" content="0;URL='<?php echo $GLOBALS['base']; ?>'" />    
	<title>Salir</title>
</head>
<body>
	
</body>
</html>