<?php

$course_id 		= addslashes($_POST['course_id']);

require_once("../../config.php");
require_once("../../call_api.php");
require_once("../../run_curl.php");

$api_function	= 'core_course_delete_courses';

$url = DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
. CALLFUNCTION  . $api_function
. '&courseids[0]=' . $course_id;

echo $url . "<br /><br />";

//Executando o curl
$response  = run_curl($url);

$result = json_decode($response);

$obj_result = get_object_vars($result);

if(empty($obj_result['warnings'][0])) {
	echo "Curso excluido com sucesso";
} else {
	echo "Deu ruim! " . $obj_result['warnings'][0]->message;
}

?>