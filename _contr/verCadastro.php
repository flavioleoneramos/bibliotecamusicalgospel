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

$conn = new mysqli($db->getLocalhost(),$db->getUsuario(),$db->getSenha(),$db->getNomeBanco());

if($conn->connect_error){
    die('Erro ao conectar' . $conn->connect_error);
}

$sql = "INSERT INTO usuario (nome,email,senha,permissao) VALUES ('$nome','$email','$senha','false')";

if($conn->query($sql) === true){
    //echo "Dados gravados com sucesso";
    session_start();
    $usuario = new usuarioClass($nome,$email,$senha,false);
    $_SESSION["nome"] = $nome;
    $_SESSION["email"] = $email;
    
    //Ok - echo $user->getNome();
}else{
    echo "Error " . $sql . "</br>" . $conn->connect_error;
}
header('location: ../perfil.php');

$conn->close();
?>