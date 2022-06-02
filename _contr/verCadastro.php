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
$usuario = new usuarioClass();

$conn = new mysqli($db->getLocalhost(),$db->getUsuario(),$db->getSenha(),$db->getNomeBanco());

if($conn->connect_error){
    die('Erro ao conectar' . $conn->connect_error);
}

$sql = "INSERT INTO usuario (nome,email,senha,foto) VALUES ('$nome','$email','$senha','_imagens/default.png')";

if($conn->query($sql) === true){
    //echo "Dados gravados com sucesso";
    session_start();
    $_SESSION["idNome"] = $nome;
    $_SESSION["idEmail"] = $email;
    $_SESSION["idFoto"] = "_imagens/default.png";

    include '../_class/controlClass.php';
    include '../_class/emailClass.php';
    $emailCadastro = new Email();
    $assunto = "Cadastro no site";
    $corpo = "<em>Obrigado por se cadastrar em nosso site!</em>";
    $emailCadastro->sendEmail($email,$assunto,$corpo);

}else{
    echo "Error " . $sql . "</br>" . $conn->connect_error;
}
header('location: ../perfil.php');

$conn->close();
?>