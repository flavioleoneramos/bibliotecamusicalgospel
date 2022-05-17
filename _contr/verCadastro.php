<?php

$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$senha = htmlspecialchars($_POST['senha']);
$senhaR = htmlspecialchars($_POST['senhaR']);

if($senha != $senhaR){
    header('location: ../cadastro.php');
}

require_once "../_class/conexaoClass.php";
require_once "../_class/usuarioClass.php";

$db = new conexaoClass();
$user = new usuarioClass();

$conn = new mysqli($db->getLocalhost(),$db->getUsuario(),$db->getSenha(),$db->getNomeBanco());

if($conn->connect_error){
    die('Erro ao conectar' . $conn->connect_error);
}

$user->setNome($nome);
$user->setEmail($email);
$user->setSenha($senha);
$sql = "INSERT INTO usuario (nome,email,senha) VALUES ('$nome','$email','$senha')";

if($conn->query($sql) === true){
    echo "Dados gravados com sucesso";
    header('location: ../perfil.php');
}else{
    echo "Error " . $sql . "</br>" . $conn->connect_error;
}

$conn->close();
?>