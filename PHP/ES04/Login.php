<html>
<head>
	<title>Login pagina</title>
</head>

<body>
	<h2>Verifica credenziali</h2></hr>
	
<?php
if(isset($_POST['username']) && ($_POST['password']))  {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username!="admin" || $password!="password")   {
		echo "<h2>Credenziali errate</h2>";
	}else {
		echo "<h2>Benvenuto" . $username . " nell'area riservata</h2>";
	}
}else{
?>
	<form name="frmLogin" action="PagRiservata.php" method="POST">
	Username: <input type="text" name="username"><br>
	Password: <input type="password" name="password"><br>
	<input type="submit" value="submit">
	</form>
	
<?php
}
?>

<a href="index_sessione.php"><h2>Torna alla home page</a><br/></h2>

</body>
</html>
	
