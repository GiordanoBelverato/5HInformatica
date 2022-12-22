<?php

function nome() {
	if(preg_match('/^[a-zA-Z]*$/',$nome))
		echo $errNome = "Il nome deve contenere solo caratteri";
	else if($nome=="")
		echo $errNome="Campo obbligatorio";
}

function cognome() {
	if(preg_match('/^[a-zA-Z]*$/',$cognome))
		echo  $errNome = "Il cognome deve contenere solo caratteri";
	else if($cognome=="")
		echo $errCognome="Campo obbligatorio";
}

?>
