
<?php
 echo "teste <br>";
 require("PHPMailer/src/Exception.php");
 echo "teste 1<br>";
 require("PHPMailer/src/PHPMailer.php");
 echo "teste 2<br>";
 require("PHPMailer/src/SMTP.php");
 echo "teste 3<br>";
 $mail = new PHPMailer\PHPMailer\PHPMailer(); 
 
 echo "teste PHPMailer... <br>";

 $mail->Debugoutput = 'html';

 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
 $mail->Debugoutput = 'html';


 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 
 echo "teste: 4<br>";

 //$mail->Host = "smtp.newpowergeradores.com.br";
 //$mail->Host = "formulario@newpowergeradores.com.br";
 $mail->Host = "smtp.gmail.com";

 $mail->Port = 465; // 465  or 587
 $mail->IsHTML(true);

 echo "teste: 5<br>";

 $mail->Username = "formulario@newpowergeradores.com.br";
 $mail->Password = "n9&yRFKu";

 $mail->SetFrom("formulario@newpowergeradores.com.br");
 $mail->Subject = "Assunto da mensagem";
 $mail->Body = "Escreva o texto do email aqui";

 echo "tentando enviar <br>1<br>";

 $mail->AddAddress("formulario@newpowergeradores.com.br");
 //$mail->AddAddress("othuki@gmail.com");

 echo "tentando enviar <br>2<br>";

    if(!$mail->Send()) {
       echo "<br>Mailer Error::: " . $mail->ErrorInfo;
    } else {
       echo "Mensagem enviada com sucesso";
    }
?>