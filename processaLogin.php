<?php
session_start();

require_once "classes/class.SQL.php";

$sql = new SQL();

$email = $_POST['login'];
$senha = $_POST['password'];

$cadastro = $sql->validaLogin($email, $senha);


// echo "<pre>"; print_r($cadastro);exit;
if ($cadastro) {
    header('Location: inicioLogin.php');

}