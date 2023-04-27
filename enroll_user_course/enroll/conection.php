<?php

$user_id	= addslashes($_POST['user_id']);
$course_id	= addslashes($_POST['course_id']);
$role_id  	= addslashes($_POST['role_id']);

echo $user_id."<br>".$course_id."<br>".$role_id."<br><br>";

require_once('../../config.php');
require_once('../../call_api.php');
require_once('../../run_curl.php');

$api_function	= 'enrol_manual_enrol_users';

$url = DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
. CALLFUNCTION  . $api_function
. '&enrolments[0][userid]=' . $user_id
. '&enrolments[0][courseid]=' . $course_id
. '&enrolments[0][roleid]='. $role_id;

echo $url . "<br /><br />";

//Executando o curl
$response  = run_curl($url);

$result = json_decode($response);

if ($result == null) {
	echo "Usuário(s) inscrito(s) com sucesso.";
} else {
	echo "Deu ruim! " . $result->message;
}

?>