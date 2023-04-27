<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPDATE USER</title>
</head>
<body>
	
	<?php

	$course_category_id = $_GET['id'];
	
	require_once('../../config.php');
	require_once('../../call_api.php');
	require_once('../../run_curl.php');
	require_once('../course_category_data.php');

	$set_course_category_data = get_course_category_data($course_category_id);	
	
	?>

	<div>
		<h3>Deseja realmente excluir a categoria de curso '<?php echo $set_course_category_data['name']; ?>'?</h3>
	</div>
	<div>
		<form action="../read/read.php">
			<input type="submit" value="CANCELAR" />
		</form>		
	</div>
	<br />
	<div>
		<form method="POST" action="conection.php">
			<input type="hidden" name="course_category_id" value="<?php echo $course_category_id; ?>">
			<input type="submit" name="confirm" value="CONFIRMAR">
		</form>		
	</div>
</body>
</html>