<?php
session_start();
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
    
    while($row = $result->fetch_assoc()){
        $_SESSION["idNome"] = $row["nome"];
        $_SESSION["idEmail"] = $row["email"];
        $_SESSION["idFoto"] = $row["foto"];
        if($row["email"] === "flavioleone8383@gmail.com"){
            $_SESSION["admin"] = true;
        }
    }
    header('location: ../perfil.php');
}else{
    header('location: ../login.php');
}
?>