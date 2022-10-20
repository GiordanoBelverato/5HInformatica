<html>
<head>
	<title>ITCS Erasmo da Rotterdam</title>
	</head>
<body>
	<h3>Controllo credenziali</h3>
<?php
$usr=$_POST["username"];
$pwd=$_POST["password"];
if ($usr!="drink" || $pwd!="long island") {
?>
<h4>Attenzione! Nome utente o passwd sbagliate.</br>
Accesso negato!</h4>
<?php
} else {
	echo "<h4>Benvenuto " . $usr . "<br/>nell'area riservata del sito!</h4>";
}
?>
</body>
</html>
