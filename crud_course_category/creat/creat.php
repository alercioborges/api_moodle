<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRIAR CATEGORIA DE CURSO</title>
</head>
<body>
	<form  method="POST" action="conection.php">
		<div>
			<label for="parent">Categoria mãe: </label><br>
			<input type="number" id="parent" name="parent" pattern="^[0-9]+" required>
		</div>
		<br />
		<div>
			<label for="name">Nome da categoria: </label><br>
			<input type="text" id="name" name="name" maxlength="30" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9 ]+" required>
		</div>
		<br />
		<div>
			<label for="number_id">Número ID da categoria: </label><br>
			<input type="number" id="number_id" name="number_id" maxlength="30" pattern="^[0-9]+" required>
		</div>
		<br />		
		<div>
			<input type="submit" id="creat" name="creat" value="Criar categoria">
		</div>
	</form>
</body>
</html>