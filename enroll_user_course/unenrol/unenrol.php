<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CANCELAR INSCRIÇÂO</title>
</head>
<body>
	
	<?php

	$course_id	= $_GET['course_id'];
	$user_id	= $_GET['user_id'];

	require_once('../../config.php');
	require_once('../../call_api.php');
	require_once('../../run_curl.php');	
	require_once('../../crud_user/user_data.php');
	require_once('../../crud_course/course_data.php');

	$set_user_data		= get_user_data($user_id);
	$set_course_data	= get_course_data($course_id);

	?>

	<div>
		<h3>Deseja realmente cancelar a inscrição do usuário de nome <?php echo $set_user_data['firstname'] . " " . $set_user_data['lastname']; ?> e e-mail <?php echo $set_user_data['email']; ?> do curso '<?php echo $set_course_data['fullname']; ?>'?</h3>
	</div>
	<div>
		<form action="../enrolled_user/select_course.php">
			<input type="submit" value="CANCELAR" />
		</form>		
	</div>
	<br />
	<div>
		<form method="POST" action="conection.php">
			<input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id; ?>">
			<input type="hidden" id="course_id" name="course_id" value="<?php echo $course_id; ?>">
			<input type="submit" name="confirm" value="CONFIRMAR">
		</form>		
	</div>
</body>
</html>