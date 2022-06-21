<?php
error_reporting(E_ALL);
ini_set( 'display_errors', 1);
echo phpversion();
exit();

/* require_once('PHPMailer/Exception.php');
require_once('PHPMailer/PHPMailer.php');
require_once('PHPMailer/SMTP.php'); */

if(isset($_POST && _POST['email']) && !empty($_POST['email'])) {

	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$assunto = addslashes($_POST['assunto']);
	$mensagem = addslashes($_POST['mensagem']);
	
	$para = $email;
	$assunto1 = 'Formulario de Contato';
		
	$corpo  = "Sua mensagem foi recebida com sucesso!"."\r\n";
	$corpo .= "Newpower Grupo Geradores, agradece seu contato."."\r\n";
	$corpo .= "Entraremos em contato logo em breve."."\r\n\r\n\r\n";
	$corpo .= "Nome: "."\r\n".$nome."\r\n\r\n";
	$corpo .= "E-mail: "."\r\n".$email."\r\n\r\n";
	$corpo .= "Assunto: "."\r\n".$assunto."\r\n\r\n";
	$corpo .= "Mensagem: "."\r\n".$mensagem."\r\n\r\n";

	//$cabecalho  = "From: formulario@newpowergeradores.com.br"."\r\n";
	$cabecalho  = "From: contato@othuki.com.br"."\r\n";
	//$cabecalho  .= "CC: formulario@newpowergeradores.com.br";
	//$cabecalho .= "Reply-To: ".$email."\r\n";
	//$cabecalho .= "X-Mailer: PHP/".phpversion();

	$result_email = mail($para, $assunto1, $corpo, $cabecalho);

	/* $nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$assunto = addslashes($_POST['assunto']);
	$mensagem = addslashes($_POST['mensagem']);

	$body  = "Sua mensagem foi recebida com sucesso!"."\r\n";
	$body .= "Newpower Grupo Geradores, agradece seu contato."."\r\n";
	$body .= "Entraremos em contato logo em breve."."\r\n\r\n\r\n";
	$body .= "Nome: "."\r\n".$nome."\r\n\r\n";
	$body .= "E-mail: "."\r\n".$email."\r\n\r\n";
	$body .= "Assunto: "."\r\n".$assunto."\r\n\r\n";
	$body .= "Mensagem: "."\r\n".$mensagem."\r\n\r\n"; */

	//$mail = new PHPMailer;

	echo json_encode([
		'response' => true,
		'send_response' => true,
		'dados' => $result_email
	]);
	return;
} else {
	echo json_encode([
		'response' => false,
		'send_response' => false,
		'dados' => $result_email
	]);
	return;
}

exit(0);

if(isset($_POST['email']) && !empty($_POST['email']))
{	
	/* $nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$assunto = addslashes($_POST['assunto']);
	$mensagem = addslashes($_POST['mensagem']);
	
	$para = $email;
	$assunto1 = 'Formulario de Contato';
		
	$corpo  = "Sua mensagem foi recebida com sucesso!"."\r\n";
	$corpo .= "Newpower Grupo Geradores, agradece seu contato."."\r\n";
	$corpo .= "Entraremos em contato logo em breve."."\r\n\r\n\r\n";
	$corpo .= "Nome: "."\r\n".$nome."\r\n\r\n";
	$corpo .= "E-mail: "."\r\n".$email."\r\n\r\n";
	$corpo .= "Assunto: "."\r\n".$assunto."\r\n\r\n";
	$corpo .= "Mensagem: "."\r\n".$mensagem."\r\n\r\n";

	$cabecalho  = "From: formulario@newpowergeradores.com.br"."\r\n";
	$cabecalho  .= "CC: formulario@newpowergeradores.com.br";
	//$cabecalho .= "Reply-To: ".$email."\r\n";
	//$cabecalho .= "X-Mailer: PHP/".phpversion();

	$result_email = mail($para, $assunto1, $corpo, $cabecalho); */
	

	

	//Inicializando classe
	$mail = new PHPMailer();

	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; // or 465
	$mail->IsHTML(true);
	$mail->Username = "formulario@newpowergeradores.com.br";
	$mail->Password = "n9&yRFKu";
	$mail->SetFrom("formulario@newpowergeradores.com.br"); //Email de origem
	$mail->Subject = "Formulario de Contato "; //Assunto
	$mail->Body = $body; //"Escreva o texto do email aqui"
	$mail->AddAddress($email);
	
	if(!$mail->Send()) {
		echo json_encode([
			'response' => ($result_email ? true : false),
			'send_response' => false,
			'error' => $mail->ErrorInfo
		]);
	} else {
		echo json_encode([
			'response' => (true),
			'send_response' => true
		]);
	}

	return;

/* echo json_encode([
	'response' => ($result_email ? true : false),
	'send_response' => $result_email
]); 

return;*/
} else {
	echo json_encode([
		'response' => false,
		'send_response' => false,
		'error' => 0
	]);
	return;
}