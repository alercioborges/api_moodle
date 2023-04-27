<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRIAR NOVO CURSO</title>
</head>
<body>
	<form  method="POST" action="conection.php">
		<div>
			<label for="fullname">Nome completo do curso: </label><br>
			<input type="text" id="fullname" name="fullname" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9 ]+" required>
		</div>
		<br />
		<div>
			<label for="shortname">Nome breve do curso: </label><br>
			<input type="text" id="shortname" name="shortname" maxlength="30" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9 ]+" required>
		</div>
		<br />
		<div>
			<label for="category">Categoria do curso: </label><br>
			<input type="number" id="category" name="category" required>
		</div>
		<br />		
		<div>
			<input type="submit" id="creat" name="creat" value="Criar curso">
		</div>
	</form>
</body>
</html>