<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SELECIONE O CURSO</title>
</head>
<body>
	<h3>SELECIONE O CURSO</h3>
	<div>
		<form method="POST" action="list_enrolled_users.php">
			<div>
				<label form="course_id">ID do curso: </label><br>
				<input type="number" name="course_id" id="course_id" required>
			</div>
			<br>
			<input type="submit" name="select_course" value="CONSULTAR">
		</form>
	</div>
</body>
</html>