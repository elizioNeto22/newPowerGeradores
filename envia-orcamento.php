<?php 
if(isset($_POST['email']) && !empty($_POST['email']))
{	
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$telefone = addslashes($_POST['telefone']);
	$servico = addslashes($_POST['servico']);
	$mensagem = addslashes($_POST['mensagem']);
	
	$para = $email;
	$assunto1 = 'Formulario de Orçamento';
		
	$corpo  = "Seu orçamento foi solicitado com sucesso!"."\r\n";
	$corpo .= "Newpower Grupo Geradores, agradece seu contato."."\r\n";
	$corpo .= "Entraremos em contato logo em breve."."\r\n\r\n\r\n";
	$corpo .= "Nome: "."\r\n".$nome."\r\n\r\n";
	$corpo .= "E-mail: "."\r\n".$email."\r\n\r\n";
	$corpo .= "Telefone: "."\r\n".$telefone."\r\n\r\n";
	$corpo .= "Serviço: "."\r\n".$servico."\r\n\r\n";
	$corpo .= "Mensagem: "."\r\n".$mensagem."\r\n\r\n";

	$cabecalho  = "From: formulario@newpowergeradores.com.br"."\r\n";
	$cabecalho  .= "CC: formulario@newpowergeradores.com.br";
	//$cabecalho .= "Reply-To: ".$email."\r\n";
	//$cabecalho .= "X-Mailer: PHP/".phpversion();

	$result_email = mail($para, $assunto1, $corpo, $cabecalho);

	echo json_encode([
		'response' => ($result_email ? true : false),
		'send_response' => $result_email
	]);
	return;
}
