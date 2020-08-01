<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Enviar
{

    public $mail;

    

    public function enviarEmail($destinatario, $tema, $cuerpo)
    {
          $this->mail = new PHPMailer(true);
        try {
            $this->mail->SMTPDebug = 2;
            $this->mail->isSMTP();
            $this->mail->Host = "smtp.gmail.com";
            $this->mail->SMTPAuth = true;
             $this->mail->Username = "20187203@itla.edu.do";
              $this->mail->Password = "20187203";
                          $this->mail->SMTPSecure = "tls";
            $this->mail->Port = "587";
            

     $this->mail->setFrom('davisitocastro.ds@gmail.com', 'David Red Social');

            $this->mail->addAddress($destinatario,);

            $this->mail->isHTML(true);
            $this->mail->Subject = $tema;
            $this->mail->Body = $cuerpo;
           $this->mail->send();
        } catch (Exception $e) {
            echo "No se pudo mandar el mensaje" + $this->mail->ErrorInfo;
        }
    }
}
?>
