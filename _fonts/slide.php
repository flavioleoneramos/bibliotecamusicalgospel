<style>
  div#slide{
    background-color: red;
    margin: 20px auto 20px auto;
    height: 350px;
    width: 750px;
  }

  @media screen and (max-width: 800px){
        div#slide{
            width: 100%;
        }
    }
</style>
<h1>Fique por dentro das notícias atuais!</h1>
<div id="slide">

</div>

<!--consulta notícias-->
<script>
    let count = 0;
    let slideNews = document.getElementById("slide")

    function mostrar(){
      count++
      slideNews.innerHTML = `mostrando  ${count}</br>`
      if(count>=3){
        count = 0
      }
    }

let funcaoParametro = function consultaPHP(){

  <?php

      require_once "../_class/conexaoClass.php";
      $c = new conexaoClass();
      $conns = new mysqli($c->getLocalhost(),$c->getUsuario(),$c->getSenha(),$c->getNomeBanco());
      
      if($conns->connect_error){
          die("Falha ao conectar: " . $conns->connect_error);
      }

      $sqls = "SELECT * FROM slide";

      $results = $conns->query($sqls);

      if($results->num_rows > 0){
        while($row = $results->fetch_array()){
          echo $row[0];
          echo $row[1];
          echo $row[2];
        }
      }

  ?>
}

    setInterval(mostrar,3000) 
  
</script>