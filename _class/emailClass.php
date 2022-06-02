<?php





class Email{
  const HOST = 'smtp.gmail.com';
  const USER = 'topgospeladoracao@gmail.com';
  const PASS = 'nezgphiszhtkapcr';
  CONST SECURE = 'ssl';
  const PORT = 465;
  const CHARSET = 'UTF-8';

  //Dados do remetente

  const FROM_EMAIL = 'topgospeladoracao@gmail.com';
  const FROM_NAME = 'Biblioteca Musical Gospel';


  public function sendEmail($addresses,$subject,$body){

    include "../PHPMailer/PHPMailerAutoload.php"; 
    //include "../PHPMailer/class.phpmailer.php";

   $obMail = new PHPMailer();

    try{
      $obMail->isSMTP(true);
      $obMail->Host = self::HOST;
      $obMail->SMTPAuth = true;
      $obMail->Username = self::USER;
      $obMail->Password = self::PASS;
      $obMail->SMTPSecure = self::SECURE;
      $obMail->Port = self::PORT;
      $obMail->CharSet = self::CHARSET;

      //remetente

      $obMail->setFrom(self::FROM_EMAIL,self::FROM_NAME);
      $obMail->addAddress($addresses);
      //$obMail->addAttachment($attachments);
      //$obMail->addCC($ccs);

      $obMail->isHTML(true);
      $obMail->Subject = $subject;
      $obMail->Body = $body;

      return $obMail->send();

    }catch(PHPMailerException $e){
      echo "email não enviado";
      return false;
    }

  }

}

?>