<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$_SESSION['msgErr'] = [];

	if (empty($_POST["orgao"])) {
		$_SESSION['msgErr']['orgao'] =  "Nome do Órgão Obrigatório";
	} else {
		$orgao = $_POST["orgao"];
	}

	if (empty($_POST["reserva"])) {
		$_SESSION['msgErr']['reserva'] =  "Número do Processo Obrigatório";
	} else {
		$reserva = $_POST["reserva"];
	}
	if (empty($_POST["status"])) {
		$_SESSION['msgErr']['status'] =  "Selecione o Status";
	} else {
		$status = $_POST["status"];
	}

	//die('IMPRIME TELA');
	if (count($_SESSION['msgErr'])) {
		header('location: porto.php');
	} else {

		$hostname = '127.0.0.1';
		$port = '3306';
		$database = 'gnp_process';
		$username = 'root';
		$password = '123456';

		$link = mysqli_connect($hostname, $username, $password, $database, $port);

		$sql = "insert into pporto (orgao, reserva, status) values ('$orgao', '$reserva', '$status')";
		$handle = mysqli_query($link, $sql);
	}
} else {
	header('location: porto.php');
}
?>
<meta http-equiv="refresh" content="0.2; URL='../painel_porto/painel.php' " />