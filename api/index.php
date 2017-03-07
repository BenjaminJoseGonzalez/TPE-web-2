<?php
	require_once("comentario.php");
	$comentario = new ComentarioAPI($_REQUEST['request']);
	echo $comentario->processAPI();
?>