<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of sessionClass
 *
 * @author leone
 */
class sessionClass {
    //put your code here
    private $sessionId;
    private $sessionNome;
    private $sessionEmail;
    
    public function __construct() {
        
    }
    
    public function getSessionId() {
        return $this->sessionId;
    }

    public function getSessionNome() {
        return $this->sessionNome;
    }

    public function getSessionEmail() {
        return $this->sessionEmail;
    }

    public function setSessionId($sessionId): void {
        $this->sessionId = $sessionId;
    }

    public function setSessionNome($sessionNome): void {
        $this->sessionNome = $sessionNome;
    }

    public function setSessionEmail($sessionEmail): void {
        $this->sessionEmail = $sessionEmail;
    }
    
    public function iniciarSessao($id,$n,$e){
        session_start();
        $this->setSessionId($id);
        $this->setSessionnome($n);
        $this->setSessionEmail($e);
        $_SESSION['id'] = $this->getSessionId();
        $_SESSION['nome'] = $this->getSessionNome();
        $_SESSION['email'] = $this->getSessionEmail();
    }
    
    public function encerrarSessao() {
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        $this->setSessionId(null);
        $this->setSessionnome(null);
        $this->setSessionEmail(null);
    }
    
    public function verifSessao() {
        if($this->getSessionId() != null && $this->getSessionNome() != null && $this->getSessionEmail() != null){
            return true;
        }else{
            return false;
        }
    }


}
