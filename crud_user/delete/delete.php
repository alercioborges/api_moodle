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

	<div>
		<h3>Deseja realmente excluir o usuário de nome <?php echo $set_user_data['firstname'] . " " . $set_user_data['lastname']; ?> e de e-mail <?php echo $set_user_data['email']; ?> ?</h3>
	</div>
	<div>
		<form action="../read/read.php">
			<input type="submit" value="CANCELAR" />
		</form>		
	</div>
	<br />
	<div>
		<form method="POST" action="conection.php">
			<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
			<input type="submit" name="confirm" value="CONFIRMAR">
		</form>		
	</div>
</body>
</html>