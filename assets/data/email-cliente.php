<?php

	require_once("PHPMailer/PHPMailerAutoload.php");
	 $mail = new PHPMailer();

	 $mail->IsSMTP(); // Define que a mensagem será SMTP
	 $mail->Host = "br646.hostgator.com.br"; // Endereço do servidor SMTP	 
	 $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
	 $mail->Username = 'no_reply@navdrone.com.br'; // Usuário do servidor SMTP
	 $mail->Password = 'licococo734'; // Senha do servidor SMTP
	//  // Define o remetente
	//  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	 $mail->From = "no_reply@navdrone.com.br"; // Seu e-mail
	 $mail->FromName = "Contato de Cliente. E-mail Automático"; // Seu nome
	

	// // // Define os destinatário(s)
	// // // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	 $mail->AddAddress('contato@navdrone.com.br', "Contato");
	//  //$mail->AddAddress('alberto_bc_sc@hotmail.com');
	//  //$mail->AddCC('administrativo@queromorarem.com.br', 'Ciclano'); // Copia
	//  //$mail->AddBCC('administrativo@queromorarem.com.br', 'Interesse em Imóvel'); // Cópia Oculta
	//  // Define os dados técnicos da Mensagem
	//  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	 $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
	//  //$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
	//  // Define a mensagem (Texto e Assunto)
	//  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	 $mail->Subject  = $_POST['assunto_param']; // Assunto da mensagem
	//  $email = "Parabéns";
	 
	//  // $email = file_get_contents('visitante-proprietario-email.php');
	//  // $email = str_replace("#URL#", $url, $email);
	//  // $email = str_replace("#COD_IMOVEL#", $imagem['cod_imovel_char'], $email);
	//  // $email = str_replace('#NOME#', $arrayContatoProprietario['nome_pessoa'], $email);
	//  // $email = str_replace('#CONTATO#', $arrayContatoProprietario['contato_pessoa_telefone'].' - '.$arrayContatoProprietario['contato_pessoa_email'], $email);
	//  // $email = str_replace('#MSG#', $arrayContatoProprietario['comentario'], $email);



	//  // $mail->body =  file_get_contents('visitante-proprietario-email.php');
	//  // $mail->body = str_replace("#URL#", $url, $mail->body);
	 $email = 'Nome: '. $_POST['nome_param']."<br> E-mail:".$_POST['email_param'].'<br> Telefone: '.$_POST['telefone_param'].'<br> Mensagem: '.$_POST['mensagem_param'];
	 $mail->Body = 	$email;
	//  //$mail->AddAttachment("book_natal.pdf", "book_natal.pdf");  // Insere um anexo
	 $enviado = $mail->Send();	

	//  $result = array();

	 if($enviado){
	 	$result["status"] = "success";
	 }else{
	 	$result["status"] = "error";
	 }

	//  echo json_encode($result);
	// $mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";
	 // Define os anexos (opcional)
	 // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	 
	// Envia o e-mail
	


?>