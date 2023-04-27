<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INSCREVER USUÁRIO EM CURSO</title>
</head>
<body>
	<h4>INSCREVER USUÁRIO EM CURSO</h4><br>
	<div>
		<form method="POST" action="conection.php">
			<div>
				<label for="user_id">Usuário:</label><br>
				<input type="number" name="user_id" id="user_id" required>
			</div>
			<br><br>
			<div>
				<label for="course_id">Curso:</label><br>
				<input type="number" name="course_id" id="course_id" required>
			</div>
			<br><br>
			<div>
				<label for="role_id">Papel do usuário no curso:</label><br>
				<input type="number" name="role_id" id="role_id" required>
			</div>
			<br><br>
			<input type="submit" name="enroll" id="enroll" value="Inscrever usuário">
		</form>
	</div>	
</body>
</html>