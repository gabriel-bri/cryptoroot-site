<div class="info">
<div class="info-contato">
	<h1 data-color="white">Contato</h1>
	<form method="post" action="<?php $server = $_SERVER['PHP_SELF']; echo($server);?>" id="formulario">
		<input type="text" name="nome" placeholder="Nome" required="">
		<input type="text" name="sobrenome" placeholder="Sobrenome" required="">
		<input type="email" name="email" placeholder="E-mail" required="">
		<textarea placeholder="Escreva sua mensagem" name="mensagem" required=""></textarea>
		<input type="submit" value="Enviar mensagem" name="bot">
	</form>
	<p>Contato: contato@cryptoroot.com.br</p>
	<?php 
		if (isset($_POST['bot'])) {
			$nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
			$sobrenome = filter_var($_POST['sobrenome'], FILTER_SANITIZE_STRING);
			$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			$msg = filter_var($_POST['mensagem'], FILTER_SANITIZE_STRING);


			@$conexao = mysqli_connect("localhost", "", "","dados");

			if (!$conexao) {
				echo "<script>swal('Ops', 'Problemas em nosso servidor, tente novamente mais tarde', 'error');</script>";
			}
			
			else {
				
				mysqli_set_charset($conexao, "utf8");

				$insercao = "INSERT INTO dados VALUES (default, '{$nome}', '{$sobrenome}', '{$email}', '{$msg}')";

				mysqli_query($conexao, $insercao);
				if (mysqli_affected_rows($conexao) > 0) {
					echo "<script>swal('Obrigado', 'Sua mensagem foi enviada com sucesso', 'success');</script>";
					mysqli_close($conexao);
				}
				
				else {
					echo "<script>swal('Mensagem não enviada', 'Algo de errado aconteceu', 'error');</script>";
				}
			}
		}
	?>
</div>
<div class="info-sobre">
	<h1 data-color="white">Sobre nós</h1>
	<p>CryptoRoot é uma equipe cujo seu objetivo principal é levar conhecimento a todos, pois apoiamos a ideia de que todo e quaisquer conhecimento deve ser livre.</p>
	<p class="segundo">A equipe da CryptoRoot é formada de alunos universitários, e é feita por um serviço comunitário. Temos o foco voltado a segurança da informação, programação ofensiva e tudo relacionado a Linux.
    </p>
</div>

<div class="info-localizacao">
	<h1 data-color="white">Localização</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117686.24132367624!2d-47.134040790662866!3d-22.813761199538224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8c15369be1449%3A0x35cb36a6a312ea5b!2sInstituto+de+Computa%C3%A7%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1541082409658" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>