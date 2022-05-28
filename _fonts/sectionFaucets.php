<?php

require_once "_class/conexaoClass.php";
require_once "_class/faucetClass.php";

$db = new conexaoClass();
$fauc = new faucetClass();

$conn = new mysqli($db->getLocalhost(),$db->getUsuario(),$db->getSenha(),$db->getNomeBanco());

if($conn->connect_error){
    die("Conexão ao banco de dados falhou " . $conn->connect_error);
}

$sql = "SELECT * FROM faucet";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $fauc->setIdFaucet($row["idFaucet"]);
        $fauc->setNomeFaucet($row["nomeFaucet"]);
        $fauc->setImagemFaucet($row["imagemFaucet"]);
        $fauc->setLinkFaucet($row["linkFaucet"]);
        $fauc->setDescricaoFaucet($row["descricaoFaucet"]);


        
        /*echo "<p>".$fauc->getIdFaucet()."</p>";
        echo "<p>".$fauc->getNomeFaucet()."</p>";
        echo "<p>".$fauc->getImagemFaucet()."</p>";
        echo "<p>".$fauc->getLinkFaucet()."</p>";
        echo "<p>".$fauc->getDescricaoFaucet()."</p>";*/
        echo "</br>";echo "</br>";
        echo "<h1>".$fauc->getNomeFaucet()."</h1>";
        echo "</br>";
        echo "<figure class='faucetList'>";
        
            echo "<img src='".$fauc->getImagemFaucet()."' alt='".$fauc->getNomeFaucet()."'>";
            echo "<figcaption>";
                echo "<h1>".$fauc->getNomeFaucet()."</h1>";
                echo "<p>".$fauc->getDescricaoFaucet()."</p>";echo "</br>";
                echo "<a href='".$fauc->getLinkFaucet()."' target='blank' alt='".$fauc->getNomeFaucet()."' class='botao'><em>Ir para ".$fauc->getNomeFaucet()."</em></a>";
            echo "</figcaption>";

        echo "</figure>";
        //echo "<a href='".$fauc->getLinkFaucet()."' target='blank' alt='".$fauc->getNomeFaucet()."' class='botao'><em>Ir para ".$fauc->getNomeFaucet()."</em></a>";
    }
}


?>