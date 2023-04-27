<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REDEFINIÇÃO DE SENHA</title>
</head>
<body>
	<div>
		<h2>Redenição de senha</h2>
	</div>
	<div>
		<h5>Para redefinir a senha, preencha o usuário ou email abaixo. Se a conta for encontrada no banco de dados, um email será enviado para o endereço de email, com as instruções sobre como restabelecer o acesso.</h5>
	</div>
	<div>
		<h3>Buscar por identificação de usuário</h3>
		<div>
			<form method="POST" action="conection.php">
				<label for="username">Identificação de usuário </label>
				<input type="text" name="username" id="username" maxlength="30" required><input type="hidden" name="reset_method" value="by_username">
				<input type="submit" name="btn_username" id="btn_username" value="Buscr">
			</form>
		</div>
	</div>
	<div>
		<h3>Buscar pelo endereço de email</h3>
		<div>
			<form method="POST" action="conection.php">
				<label for="email">Endereço de e-mail </label>
				<input type="email" name="email" id="email" required>
				<input type="hidden" name="reset_method" value="by_email" >
				<input type="submit" name="btn_email" id="btn_email" value="Buscr">
			</form>
		</div>
	</div>
</body>
</html>