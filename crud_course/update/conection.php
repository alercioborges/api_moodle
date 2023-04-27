<?php

$id = addslashes($_POST['id']);
$fullname = addslashes($_POST['fullname']);
$shortname	= addslashes($_POST['shortname']);
$category = addslashes($_POST['category']);

//Removendo espaços do sobrenome para a url 
$fullname = str_replace(' ', '%20', $fullname);
$shortname = str_replace(' ', '%20', $shortname);

echo $id."<br>".$fullname."<br>".$shortname."<br>".$category."<br><br>";

require_once('../../config.php');
require_once('../../call_api.php');
require_once('../../run_curl.php');

$api_function = 'core_course_update_courses';

$url = DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
. CALLFUNCTION  . $api_function
. '&courses[0][id]=' . $id
. '&courses[0][fullname]=' . $fullname
. '&courses[0][shortname]=' . $shortname
. '&courses[0][categoryid]=' . $category;

echo $url . "<br /><br />";

//Executando o curl
$response  = run_curl($url);

$result = json_decode($response);

$obj_result = get_object_vars($result);

if(empty($obj_result['warnings'][0])) {
	echo "Curso atualizado com sucesso";
} else {
	echo "Deu ruim! " . $obj_result['warnings'][0]->message;
}

?>