<?php

$user_id	= addslashes($_POST['user_id']);
$course_id	= addslashes($_POST['course_id']);

echo $user_id . "<br>" . $course_id . "<br>";

require_once('../../config.php');
require_once('../../call_api.php');
require_once('../../run_curl.php');

$api_function	= 'enrol_manual_unenrol_users';

$url = DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
. CALLFUNCTION  . $api_function
. '&enrolments[0][userid]=' . $user_id
. '&enrolments[0][courseid]=' . $course_id;

echo $url . "<br /><br />";

//Executando o curl
$response = run_curl($url);

$result = json_decode($response);

echo "<pre>"; var_dump($result); echo "</pre>";

if($result == null) {
	echo "Inscrição de usuário cancelada com sucesso";
} else {
	echo "Deu ruim!";
}

?>