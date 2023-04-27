<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EDITAR CURSO</title>
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
	
	<form  method="POST" action="conection.php">
		<div>
			<label for="fullname">Nome completo do curso: </label><br>
			<input type="text" id="fullname" name="fullname" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9 ]+" value="<?php echo $set_course_data['fullname']; ?>" required>
		</div>
		<br />
		<div>
			<label for="shortname">Nome breve do curso: </label><br>
			<input type="text" id="shortname" name="shortname" maxlength="30" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9 ]+" value="<?php echo $set_course_data['shortname']; ?>" required>
		</div>
		<br />
		<div>
			<label for="category">Categoria do curso: </label><br>
			<input type="number" id="category" name="category" maxlength="30" value="<?php echo $set_course_data['category']; ?>" required>
		</div>
		<br />		
		<div>
			<input type="hidden" name="id" id="id" value="<?php echo $course_id; ?>">
			<input type="submit" id="creat" name="creat" value="Criar curso">
		</div>
	</form>
</body>
</html>