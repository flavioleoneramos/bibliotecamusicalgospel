<?php

require_once "_class/conexaoClass.php";

$db = new conexaoClass();

$conn = new mysqli($db->getLocalhost(),$db->getUsuario(),$db->getSenha(),$db->getNomeBanco());

if($conn->connect_error){
  die("Erro ao conectar ao banco ". $conn->connect_error);
}

$sql = "SELECT * FROM noticia";
$result = $conn->query($sql);

if($result->num_rows > 0){
  echo "<ul>";
  while($row = $result->fetch_assoc()){
    echo "<li>";
      echo "<h1>" . $row["tituloNoticia"] . "</h1>";
      echo "<img src='".$row["imagemNoticia"] . "' alt='" . $row["tituloNoticia"]. "' </br>";
      echo "<p>" . $row["textoNoticia"] . "</p>";
      echo "<form method='get' action='../displayNoticias.php'>";
      echo "<input type='text' hidden='hidden' name='tituloNoticia' value='" . $row["tituloNoticia"] . "'>";
      echo "<input type='text' hidden='hidden' name='imagemNoticia' value='".$row["imagemTitulo"] . "'>";
      echo "<input type='text' hidden='hidden' name='corpoNoticia' value='".$row["textoNoticia"] . "'>";
      echo "</form>";
      echo "<li>";
  }
  echo "</ul>";
}
