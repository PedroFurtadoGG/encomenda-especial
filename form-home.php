<div class="col-md-8">
	<form id="contact-form" action="<?php echo URL;?>sendmail/send.php" method="post">

	  <div class="row contact-row">
		<div class="col-md-6 contact-name">
		  <input name="nome" id="name" type="text" placeholder="Nome*">
		</div>
		<div class="col-md-6 contact-email">
		  <input name="email" id="mail" type="email" placeholder="E-mail*">
		</div>
	  </div>
	  <div class="row contact-row">
		<div class="col-md-6 contact-name">
		  <input name="telefone" id="telefone" type="text" placeholder="Telefone*">
		</div>
		<div class="col-md-6 contact-email">
		  <input name="assunto" id="assunto" type="email" placeholder="Assunto*">
		</div>
	  </div>

	  <textarea name="mensagem" id="comment" placeholder="Mensagem"></textarea>
	  <input type="submit" class="btn btn-lg btn-color btn-submit" value="Enviar Mensagem" id="submit-message">
	  <div id="msg" class="message"></div>
	</form>
</div> <!-- end col -->