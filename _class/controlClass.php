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
            echo "Código gravado com sucesso " . $seed;
        }
    }

public function enviaEmail($codigo,$destinatario){
// example on using PHPMailer with GMAIL


include("../PHPMailer/class.phpmailer.php");
include("../PHPMailer/class.smtp.php"); // note, this is optional - gets called from main class if not already loaded
//include("../PHPMailer/src/Exception.php");

// example on using PHPMailer with GMAIL
$mail             = new PHPMailer();

$body             = "<p>Código para recuperar senha </p>" . $codigo;

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port

$mail->Username   = "topgospeladoracao@gmail.com";  // GMAIL username
$mail->Password   = "nezgphiszhtkapcr";            // GMAIL password

$mail->From       = "topgospeladoracao@gmail.com";
$mail->FromName   = "Webmaster";
$mail->Subject    = "Recuperação de senha";
$mail->AltBody    = "<p>Código para recuperar senha </p>" . $codigo; //Text Body
$mail->WordWrap   = 50; // set word wrap

$mail->MsgHTML($body);

$mail->AddReplyTo("replyto@yourdomain.com","Webmaster");

$mail->AddAttachment("/path/to/file.zip");             // attachment
$mail->AddAttachment("/path/to/image.jpg", "new.jpg"); // attachment

$mail->AddAddress($destinatario,"First Last");

$mail->IsHTML(true); // send as HTML

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message has been sent";
}

}

}