<?php

use LDAP\Result;

$email = htmlspecialchars($_POST["email"]);
$senha = htmlspecialchars($_POST["senha"]);

require_once "../_class/conexaoClass.php";
require_once "../_class/usuarioClass.php";

$db = new conexaoClass();

$conn =  new mysqli($db->getLocalhost(),$db->getUsuario(),$db->getSenha(),$db->getNomeBanco());

if($conn->connect_error){
    die ("Conexão falhou " . $conn->connect_error);
}

$sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    
    $usuario = new usuarioClass();
    session_start();
    while($row = $result->fetch_assoc()){
        $_SESSION["nome"] = $row["nome"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["foto"] = $row["foto"];
    }
    header('location: ../perfil.php');
}
?>