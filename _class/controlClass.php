<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of controlClass
 *
 * @author leone
 */
class controlClass{
    //put your code here

    public function insereCodigo($email,$seed){
        require_once "conexaoClass.php";

        $insereSeed = new conexaoClass();

        $conn = new mysqli($insereSeed->getLocalhost(),$insereSeed->getUsuario(),$insereSeed->getSenha(),$insereSeed->getNomeBanco());
    
        if($conn->connect_error){
            die("Falha ao conectar " . $conn->connect_error);
        }

        $sql = "UPDATE usuario SET codigo = '$seed' WHERE email = '$email'";
        

        if($conn->query($sql) === TRUE){
            echo "Codigo gravado com sucesso " . $seed;
        }
    }

}