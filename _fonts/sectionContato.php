
<?php
$retornoNome = htmlspecialchars(isset($_GET["idNome"]));

if(isset($_GET["idNome"])){
  echo "<span class='mensagem'>Obrigado pelo contato, em breve retornaremos.</span>";
}

?>
<style>
  span.mensagem{
    margin: 20px;
    color: brown;
    font-weight: bold;
    font-size: 15pt;
  }
</style>
</br><h3>Entre em contato através do formulário abaixo:</h3></br>

<form method="get" action="#" enctype="multipart/form-data">
  <label for="idNome">Nome: </label><input type="text" name="idNome" id="idNome" required></br></br>
  <label for="idEmail">Email: </label><input type="email" name="idEmail" id="idEmail" required></br></br>
  <label for="idMsg">Mensagem: </label><textarea type="text" name="idMsg" id="idMsg"></textarea></br></br>
  <input type="submit" value="Enviar mensagem" class="botao">
</form>