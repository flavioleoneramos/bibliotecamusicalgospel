  <style>
    .imgNews{
      max-width: 100px;
      max-height: 100px;
    }
  </style>
  <?php

      require_once "_class/conexaoClass.php";
      $c = new conexaoClass();
      $conns = new mysqli($c->getLocalhost(),$c->getUsuario(),$c->getSenha(),$c->getNomeBanco());
      
      if($conns->connect_error){
          die("Falha ao conectar: " . $conns->connect_error);
      }

      $sqls = "SELECT * FROM noticia";

      $results = $conns->query($sqls);

      if($results->num_rows > 0){
        $cont = 0;
        while($row = $results->fetch_array()){
          echo "<h1>".$row[0] ."</h1>";
          echo "<img src='".$row[1]."' class='imgNews'>";
          echo "<em>".$row[2] ."</em></br>";

          echo "<form method='get' action='displayNoticias.php'>
                    <input type='text' hidden='hidden' name='tituloNoticia' value='" . $row[0]  . "'>
                    <input type='text' hidden='hidden' name='imagemNoticia' value='" . $row[1]  . "'>
                    <input type='text' hidden='hidden' name='resumoNoticia' value='" . $row[2]  . "'>
                    <input type='text' hidden='hidden' name='corpoNoticia' value='" . $row[3]  . "'>
                    <input type='submit' value='Saiba mais' class='botao'></br></br>
                </form>";
            $cont++;
            if($cont > 2){
              break;
            }
        }
      }
  ?>


  