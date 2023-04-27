<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EDITAR CATEGORIA DE CURSO</title>
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
	
	<form  method="POST" action="conection.php">
		<div>
			<label for="parent">Categoria mãe: </label><br>
			<input type="number" id="parent" name="parent" pattern="^[0-9]+" value="<?php echo $set_course_category_data['parent']; ?>" required>
		</div>
		<br />
		<div>
			<label for="name">Nome da categoria: </label><br>
			<input type="text" id="name" name="name" maxlength="30" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9 ]+" value="<?php echo $set_course_category_data['name']; ?>" required >
		</div>
		<br />
		<div>
			<label for="number_id">Número ID da categoria: </label><br>
			<input type="number" id="number_id" name="number_id" maxlength="30" pattern="^[0-9]+" value="<?php echo $set_course_category_data['number_id']; ?>" required>
		</div>
		<br />		
		<div>
			<input type="hidden" name="id" id="id" value="<?php echo $set_course_category_data['id']; ?>">
			<input type="submit" id="edit" name="edit" value="Salvar mudanças">
		</div>
	</form>
</body>
</html>