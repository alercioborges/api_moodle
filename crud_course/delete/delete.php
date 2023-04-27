<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EXCLUIR CURSO</title>
</head>
<body>
	
	<?php

	$course_id = $_GET['id'];

	require_once('../../config.php');
	require_once('../../call_api.php');
	require_once('../../run_curl.php');
	require_once('../course_data.php');

	$set_course_data = get_course_data($course_id);
	
	?>

	<div>
		<h3>Deseja realmente excluir o curso '<?php echo $set_course_data['fullname']; ?>'?</h3>
	</div>
	<div>
		<form action="../read/read.php">
			<input type="submit" value="CANCELAR" />
		</form>		
	</div>
	<br />
	<div>
		<form method="POST" action="conection.php">
			<input type="hidden" id="course_id" name="course_id" value="<?php echo $course_id; ?>">
			<input type="submit" name="confirm" value="CONFIRMAR">
		</form>		
	</div>
</body>
</html>