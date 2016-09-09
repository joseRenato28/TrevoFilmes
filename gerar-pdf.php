<?php
// validar email
function validaEmail($email) {
	$conta = "^[a-zA-Z0-9\._-]+@";
	$domino = "[a-zA-Z0-9\._-]+.";
	$extensao = "([a-zA-Z]{2,4})$";
	$pattern = $conta.$domino.$extensao;
	if (ereg($pattern, $email))
		return true;
	else
		return false;
}

if(!isset($_POST["aceito"])){
	echo "É necessario concordar com os termos do contrato";

}else if(!isset($_POST["contratante"]) || !isset($_POST["id"]) || !isset($_POST["expedida"]) || !isset($_POST["endereco"]) || !isset($_POST["aniversariante"]) || !isset($_POST["local-festa"]) || !isset($_POST["data-festa"]) || !isset($_POST["horario"]) || !isset($_POST["de"]) || !isset($_POST["pacote"]) || !isset($_POST["pagamento"]) || !isset($_POST["autorizacao"]) || !isset($_POST["email"])){

	echo "Todos os campos são obrigatórios";

}else if(!validaEmail($_POST["email"])){
	echo "Endereço de E-mail invalido";
}else{

	$contratante = $_POST["contratante"];
	$id = $_POST["id"];
	$expedida = $_POST["expedida"];
	$endereco = $_POST["endereco"];

	$aniversariante = $_POST["aniversariante"];
	$local_festa = $_POST["local-festa"];
	$data_festa = $_POST["data-festa"];
	$horario = $_POST["horario"];
	$de = $_POST["de"];

	$pacote = $_POST["pacote"];


	$opcinal = $_POST["opcinal"];

	$total = $_POST["total"];
	$pagamento = $_POST["pagamento"];

	$autorizacao = $_POST["autorizacao"];

	$aceito = $_POST["aceito"];
	$email = $_POST["email"];

	$array_data_festa = explode("-", $data_festa);
	$data_atual = date("d/m/Y");

	$array_data_atual = explode("/", $data_atual);

	$valor = 0;
	$valor2 = 690.00;
	// calcular total      
	if($pacote == 1){
		$valor2 = 690.00;
	}else if($pacote == 2){
		$valor2 = 980.00;
	}else if($pacote == 3){
		$valor2 = 1200.00;       
	}

	foreach ($opcinal as $key => $opcao) {
		if($opcao == "DVD extra"){
			$valor = $valor + 30.00;
		}else if($opcao == "Bluray"){
			$valor = $valor + 50.00;
		}else if($opcao == "Pen card"){
			$valor = $valor + 60.00;
		}
	}

	$total = $valor + $valor2;

	include("contrato-pdf.php");

	// gerar pdf e salvar no servidor
	include("mpdf60/mpdf.php");

	$arquivo = "pdf/".$contratante." - ".$array_data_atual[0]." de ".$array_data_atual[1]." de ".$array_data_atual[2].mt_rand(1000, 9999).".pdf";

	$mpdf=new mPDF(); 
	$mpdf->SetDisplayMode('fullpage');
	$css = file_get_contents("css/contrato.css");
	$mpdf->WriteHTML($css,1);
	$mpdf->WriteHTML($pagina);
	$mpdf->Output($arquivo, "F");


	// enviar email	
	require_once('PHPMailer/class.phpmailer.php');
	require_once('PHPMailer/class.smtp.php');
	$mail = new PHPMailer;
		//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	$mail->CharSet = 'UTF-8';
		//$mail->SMTPDebug = 2; 
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';
		//Set the hostname of the mail server
	$mail->Host = 'smtp.domino.com';
		// use
		// $mail->Host = gethostbyname('smtp.gmail.com');
		// if your network does not support SMTP over IPv6
		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 26;
		//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';
		//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
		//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "xxxxxxxx";
		//Password to use for SMTP authentication
	$mail->Password = "xxxxx";
		//Set who the message is to be sent from
	$mail->setFrom('xxxx', 'Trevo Filmes');
	$mail->AddReplyTo('xxxxxx', 'Trevo Filmes');

		//Set who the message is to be sent to
	$mail->addAddress($email, $contratante);
		//Set an alternative reply-to address
		//Set the subject line
	$mail->Subject = 'Contrato '.$contratante;
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
	$mail->msgHTML("Segue o contrato em anexo");
		//Replace the plain text body with one created manually
	$mail->AltBody = 'Contrato de adesão Trevo Filmes';
		//Attach an image file
	$mail->addAttachment($arquivo);
		//send the message, check for errors
	if (!$mail->send()) {
		echo "Erro ao enviar o E-mail! Tente novamente!";
	} else {
		echo "Um E-mail foi enviado para: ".$email;
	}


}
?>
