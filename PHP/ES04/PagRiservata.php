<html>
<head>
	<title>ITCS Erasmo da Rotterdam</title>
 /head>
<body>
<?php
session_start();      //avvio sessione

if(!isset($_SESSION["username"]) && empty($_SESSION["username"])) {
	echo "<h1>Effettuare prima il Login.</h1>"; ?>
	<a href="Login.php"><h2>Effettuare il Login</h2></a>
	
<?php
}else {
	echo "Benvenuto nel sito";
?>

<a href="Logout.php"><h2>Logout</h2></a>

<?php
}
?>

</body>
</html>
