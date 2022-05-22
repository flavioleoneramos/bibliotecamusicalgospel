<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of conexao
 *
 * @author leone
 */
class conexaoClass {
    //put your code here
    private $localhost;
    private $usuario;
    private $senha;
    private $nomeBanco;
    
    public function __construct() {
        $this->localhost = "localhost";
        $this->usuario = "root";
        $this->senha = "";
        $this->nomeBanco = "bmg";
    }
    
    public function getLocalhost() {
        return $this->localhost;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getNomeBanco() {
        return $this->nomeBanco;
    }

    public function setLocalhost($localhost): void {
        $this->localhost = $localhost;
    }

    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function setNomeBanco($nomeBanco): void {
        $this->nomeBanco = $nomeBanco;
    }


    //funções específicas

public function inserirTv($idTv,$nomeTv,$imagemTv,$linkTv){
   //$imagemTv = "_imagens/" . $imagemTv;
    require_once "_class/conexaoClass.php";
    $c = new conexaoClass();
    $conn = new mysqli($c->getLocalhost(),$c->getUsuario(),$c->getSenha(),$c->getNomeBanco());
    
    if($conn->connect_error){
        die("Falha ao conectar: " . $conn->connect_error);
    }
    require_once "_class/tvOnlineClass.php";
    $tvi = new tvOnlineClass();
    //poderia usar o construtor
    $tvi->setIdTv($idTv);
    $tvi->setNomeTv($nomeTv);
    $tvi->setImagemTv($imagemTv);
    $tvi->setLinkTv($linkTv);

    $sql = "INSERT INTO tvOnline VALUES ('$idTv','$nomeTv','$imagemTv','$linkTv')";
    
    if($conn->query($sql) === TRUE){
        echo "Dados de Tv Online gravados com sucesso!";
    }



}

public function inserirFaucet($idFaucet,$nomeFaucet,$imagemFaucet,$linkFaucet,$descricaoFaucet){
    require_once "_class/conexaoClass.php";
    $c = new conexaoClass();
    $conn = new mysqli($c->getLocalhost(),$c->getUsuario(),$c->getSenha(),$c->getNomeBanco());
    
    if($conn->connect_error){
        die("Falha ao conectar: " . $conn->connect_error);
    }

    /*require_once "_class/faucetClass.php";
    $fau = new faucetClass();
    $fau->setIdFaucet($idFaucet);
    $fau->setNomeFaucet($nomeFaucet);
    $fau->setImagemFaucet($imagemFaucet);
    $fau->setLinkFaucet($linkFaucet);
    $fau->setDescricaoFaucet($descricaoFaucet);*/
    $sql = "INSERT INTO faucet VALUES ('$idFaucet','$nomeFaucet','$imagemFaucet','$linkFaucet','$descricaoFaucet')";
    
    if($conn->query($sql) === TRUE){
        echo "Dados de Faucets gravados com sucesso!";
    }



}

public function mostrarTvAside(){
    require_once "_class/conexaoClass.php";
    $c = new conexaoClass();
    $conn = new mysqli($c->getLocalhost(),$c->getUsuario(),$c->getSenha(),$c->getNomeBanco());
    
    if($conn->connect_error){
        die("Falha ao conectar: " . $conn->connect_error);
    }

$sql = "SELECT * FROM tvOnline";
$result = $conn->query($sql);

echo "<ul>";
$c = 0;
if($result->num_rows > 0){
    require_once "_class/tvOnlineClass.php";
    $tv = new tvOnlineClass();
    while($row = $result->fetch_assoc()){
        $tv->setIdTv($row["idTv"]);
        $tv->setNomeTv($row["nomeTv"]);
        $tv->setImagemTv($row["imagemTv"]);
        $tv->setLinkTv($row["linkTv"]);
        echo "<li>";
            echo "<figure>
                <img src='" . $row["imagemTv"] . "' alt='" . $row["nomeTv"] . " class='imgP''>
                <figcaption>                    
                    <form method='get' action='displayTv.php'>
                        <input type='text' hidden='hidden' name='idTv' value='" . $tv->getIdTv() . "'>
                        <input type='text' hidden='hidden' name='nomeTv' value='" . $tv->getNomeTv() . "'>
                        <input type='text' hidden='hidden' name='linkTv' value='" . $tv->getLinkTv() . "'>
                        <input type='text' hidden='hidden' name='imagemTv' value='" . $tv->getImagemTv() . "'></br>
                        <input type='submit' value='Assistir' class='botao'></br></br>
                    </form>
                </figcaption>
            </figure>";
        echo "</li>";

        $c++;
        if($c>=6){
            break;
        }
    }
}

    echo "</ul>";
    
    
}

public function inserirCurso($idCurso,$nomeCurso,$imagemCurso,$linkCurso,$linkComprar,$imagemLinkCurso,$imagemLinkComprar,$descricaoCurso){
    require_once "_class/conexaoClass.php";
    $c = new conexaoClass();
    $conn = new mysqli($c->getLocalhost(),$c->getUsuario(),$c->getSenha(),$c->getNomeBanco());
    
    if($conn->connect_error){
        die("Falha ao conectar: " . $conn->connect_error);
    }
    /*require_once "_class/cursoClass.php";
    $cur = new cursoClass();
    $cur->setIdCurso($idCurso);
    $cur->setNomeCurso($nomeCurso);
    $cur->setImagemCurso($imagemCurso);
    $cur->setLinkCurso($linkCurso);
    $cur->setLinkComprar($linkComprar);
    $cur->setImagemLinkCurso($imagemLinkCurso);
    $cur->setImagemLinkComprar($imagemLinkComprar);
    $cur->setDescricaoCurso($descricaoCurso);*/
    $sql = "INSERT INTO curso VALUES ('$idCurso','$nomeCurso','$imagemCurso','$linkCurso','$linkComprar','$imagemLinkCurso','$imagemLinkComprar','$descricaoCurso')";
    
    if($conn->query($sql) === TRUE){
        echo "Dados de Cursos gravados com sucesso!";
    }
}

public function mostrarCursos(){
    require_once "_class/conexaoClass.php";
    $c = new conexaoClass();

    $conn = new mysqli($c->getLocalhost(),$c->getUsuario(),$c->getSenha(),$c->getNomeBanco());
    
    if($conn->connect_error){
        die("Falha ao conectar: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM curso";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        require_once "_class/cursoClass.php";
        $cur = new cursoClass();
        while($row = $result->fetch_assoc()){
            $cur->setIdCurso($row["idCurso"]);
            $cur->setNomeCurso($row["nomeCurso"]);
            $cur->setImagemCurso($row["imagemCurso"]);
            $cur->setLinkCurso($row["linkCurso"]);
            $cur->setLinkComprar($row["linkComprar"]);
            $cur->setImagemLinkCurso($row["imagemLinkCurso"]);
            $cur->setImagemLinkComprar($row["imagemLinkComprar"]);
            $cur->setDescricaoCurso($row["descricaoCurso"]);
            echo "<ul>";
                echo "<li>";
                    echo "<h1>Curso: <em>".$cur->getNomeCurso()."</em></h1>";
                    echo "<figure>";
                        echo "<img src='".$cur->getImagemCurso()." class='link'>";
                        echo "<figcaption>";
                        echo "<p><h1>Descrição:</h1></p>";
                        echo "<p>".$cur->getDescricaoCurso()."</p>";
                        echo "</figcaption>";
                        echo "<a href='".$cur->getLinkCurso()."' class='link'>Ver mais</a> <a href='".$cur->getLinkComprar()."' class='link'>Comprar</a>";
                    echo "</figure>";
                echo "<li>";
            echo "</ul>";
            

        }
    }
    
}

public function mostrarTvOnline(){
    require_once "_class/conexaoClass.php";
    $c = new conexaoClass();
    $conn = new mysqli($c->getLocalhost(),$c->getUsuario(),$c->getSenha(),$c->getNomeBanco());
    
    if($conn->connect_error){
        die("Falha ao conectar: " . $conn->connect_error);
    }

$sql = "SELECT * FROM tvOnline";
$result = $conn->query($sql);

echo "<ul>";
if($result->num_rows > 0){
    require_once "_class/tvOnlineClass.php";
    $tv[] = new tvOnlineClass();
    $count = 0;
    while($row = $result->fetch_assoc()){
        $tv[$count]->setIdTv($row["idTv"]);
        $tv[$count]->setNomeTv($row["nomeTv"]);
        $tv[$count]->setImagemTv($row["imagemTv"]);
        $tv[$count]->setLinkTv($row["linkTv"]);
        echo "<li>";
            echo "<figure>
                <img src='" . $row["imagemTv"] . "' alt='" . $row["nomeTv"] . "'>
                <figcaption>                    
                    <form method='get' action='displayTv.php'>
                        <input type='text' hidden='hidden' name='idTv' value='" . $tv[$count]->getIdTv() . "'>
                        <input type='text' hidden='hidden' name='nomeTv' value='" . $tv[$count]->getNomeTv() . "'>
                        <input type='text' hidden='hidden' name='linkTv' value='" . $tv[$count]->getLinkTv() . "'>
                        <input type='text' hidden='hidden' name='imagemTv' value='" . $tv[$count]->getImagemTv() . "'></br>
                        <input type='submit' value='Assistir' class='botao'></br></br>
                    </form>
                </figcaption>
            </figure>";
        echo "</li>";
    }
}

    echo "</ul>";
    
    
}

}
