<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CREAT USER</title>
</head>
<body>
	<form  method="POST" action="conection.php">
		<div>
			<label for="firstname">Nome: </label><br>
			<input type="text" id="firstname" name="firstname" minlength="3" maxlength="30" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+" required>
		</div>
		<br />
		<div>
			<label for="lastname">Sobrenome: </label><br>
			<input type="text" id="lastname" name="lastname" minlength="3" maxlength="30" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+" required>
		</div>
		<br />
		<div>
			<label for="username">Nome de usuário: </label><br>
			<input type="text" id="username" name="username" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ@.0-9]+" required>
		</div>
		<br />
		<div>
			<label for="password">Senha: </label><br>
			<input type="password" id="password" name="password" required>		
		</div>
		<br />
		<div>
			<label for="email">E-mail: </label><br>
			<input type="email" id="email" name="email" required>
		</div>
		<br />
		<div>
			<input type="submit" id="register" name="register" value="Cadastrar">
		</div>
	</form>
</body>
</html>