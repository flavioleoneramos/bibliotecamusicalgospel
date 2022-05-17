<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of usuarioClass
 *
 * @author leone
 */
class usuarioClass {
    //put your code here
    private $nome;
    private $email;
    private $senha;
    private $foto;
    
    public function __construct() {
        $this->nome = "testeNome";
        $this->email = "testeEmail";
        $this->senha = "testeSenha";
        $this->foto = "testeFoto";
    }

    
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function setFoto($foto): void {
        $this->foto = $foto;
    }




}
