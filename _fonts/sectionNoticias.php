
<style>
  
</style>
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

      echo "<figure id='figureNews'>";
        echo "<img src='".$row["imagemNoticia"] . "' alt='" . $row["tituloNoticia"]. "'>";
        echo "<figcaption>";
            echo "<em>" . $row["resumoNoticia"] . "</em>";
            echo "<form method='get' action='displayNoticias.php'>";
            echo "<input type='text' hidden='hidden' name='tituloNoticia' value='" . $row["tituloNoticia"] . "'>";
            echo "<input type='text' hidden='hidden' name='imagemNoticia' value='".$row["imagemNoticia"] . "'>";
            echo "<input type='hidden' hidden='hidden' name='corpoNoticia' value='".$row["corpoNoticia"] . "'>";
            echo "<input type='submit' value='Ver mais' class='botao'>";
            echo "</form>";
        echo "</figcaption>";
      echo "</figure>";

      echo "<li>";
  }
  echo "</ul>";
}
