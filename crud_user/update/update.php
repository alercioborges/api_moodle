<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPDATE USER</title>
</head>
<body>
	
	<?php

	$user_id = $_GET['id'];	
	
	require_once('../../config.php');
	require_once('../../call_api.php');
	require_once('../../run_curl.php');
	require_once('../user_data.php');

	$set_user_data = get_user_data($user_id);
	
	?>
	
	<form  method="POST" action="conection.php">
		<div>
			<label for="firstname">Nome: </label><br>
			<input type="text" id="firstname" name="firstname" minlength="3" maxlength="30" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+" value="<?php echo $set_user_data['firstname']; ?>" required>
		</div>
		<br />
		<div>
			<label for="lastname">Sobrenome: </label><br>
			<input type="text" id="lastname" name="lastname" minlength="3" maxlength="30" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+" value="<?php echo $set_user_data['lastname']; ?>" required>
		</div>
		<br />
		<div>
			<label for="username">Nome de usuário: </label><br>
			<input type="text" id="username" name="username" maxlength="30" value="<?php echo $set_user_data['username']; ?>" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ@.0-9]+" required>
		</div>
		<br />
		<div>
			<label for="email">E-mail: </label><br>
			<input type="email" id="email" name="email" value="<?php echo $set_user_data['email']; ?>" required>
		</div>
		<br />
		<div>
			<input type="hidden" name="user_id" id="user_id" value="<?php echo $set_user_data['id']; ?>">
			<input type="submit" id="update" name="update" value="Atualizar perfil">
		</div>
	</form>
	<br />
	<div>
		<a href="reset_password/reset_password.php">Esqueceu o seu usuário ou senha?</a>	
	</div>
</body>
</html>