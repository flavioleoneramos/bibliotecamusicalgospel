<?php
session_start();
session_destroy();

require_once "_class/usuarioClass.php";

$user = new usuarioClass();

$user->setNome("");
$user->setEmail("");
$user->setFoto("");
$user->setPermissao(false);
$user->setSenha("");

header('location: index.php');

?>