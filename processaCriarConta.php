<?php

session_start();

require_once "classes/class.SQL.php";

$sql = new SQL();


$nome_completo = $_POST["nome_completo"];
$email = $_POST["email"];
$username = $_POST["username"];
$senha = $_POST["senha"];


$cadastro = $sql->cadastrar($nome_completo, $email, $username, $senha);

if($cadastro){
	header('Location: login.php');

}

