<?php
 
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("class.phpmailer.php");
require_once("../functions.php");
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(true); // Define que a mensagem será SMTP
$mail->Host = "mail.encomendaespecial.com.br"; // Endereço do servidor SMTP
$mail->Port = 465;
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->SMTPSecure = 'ssl';
$mail->Username = 'contato@encomendaespecial.com.br'; // Usuário do servidor SMTP
$mail->Password = 'encomenda@321'; // Senha do servidor SMTP
	
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "contato@encomendaespecial.com.br"; // Seu e-mail
$mail->Sender = "contato@encomendaespecial.com.br"; // Seu e-mail
$mail->FromName = "Encomenda Especial"; // Seu nome
 
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAddress('rremotus@gmail.com');
$mail->AddAddress('contato@encomendaespecial.com.br');
//$mail->AddAddress('suporte@nextsites.com.br');
//$mail->AddAddress('rodrigo@duropvc.com.br');
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
 
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Contato Via Encomenda Especial modas"; // Assunto da mensagem
$mail->Body = "Nome: " . $_POST['nome'] . "<br>Email: " . $_POST['email']."<br>Assunto: " . $_POST['assunto']."<br>Mensagem>". $_POST['mensagem'];
//$_POST['name'] . $_POST['email'] . $_POST['telefone'] . $_POST['mensagem'];
 
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo
 
// Envia o e-mail
$enviado = $mail->Send();
 
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
 
// Exibe uma mensagem de resultado
if ($enviado) {
?>
<!-- Google Code for Formulário site Conversion Page -->

<script>
	alert('E-mail enviado com sucesso!');
	window.location.href='http://autoescolafederal.com';
</script>
<?php
} else {
echo "
<script>
			alert('Mensagem não enviada! Tente novamente.');
			window.location.href='http://autoescolafederal.com';
		</script>
";
}
 
?>