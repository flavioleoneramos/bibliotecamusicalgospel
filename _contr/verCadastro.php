<?php

$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$senha = htmlspecialchars($_POST['senha']);
$senhaR = htmlspecialchars($_POST['senhaR']);

if($senha != $senhaR){
    header('location: ../cadastro.php');
}

?>