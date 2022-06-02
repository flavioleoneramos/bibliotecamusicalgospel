<style>
  #recuperaSenha{
    margin: auto;
    text-align: center;
  }
</style>
<?php
$codigo = $_POST["idCodigo"];
$novaSenhaR = $_POST["idNovaSenha"];
$idEmail = $_POST["idEmail"];

require_once "../_class/conexaoClass.php";
$db = new conexaoClass();
$conn = new mysqli($db->getLocalhost(),$db->getUsuario(),$db->getSenha(),$db->getNomeBanco());

if($conn->connect_error){
  die("Conection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuario WHERE email='$idEmail' AND codigo='$codigo'";
$result = $conn->query($sql);

if($result->num_rows > 0){

  $sql1 = "UPDATE usuario SET senha = '$novaSenhaR' WHERE codigo='$codigo'";
  
  if($conn->query($sql1) === TRUE){
    header('location:../login.php');
  }
}else{
  header('location:../recupSenha.php');
}







//echo $codigo; 

//echo $novaSenhaR;

//verificar o código se é igual
//Se sim dar um update e redireciona para perfil
//Se não volta pra recupera senha
?>