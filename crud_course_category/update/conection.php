<?php

$id = addslashes($_POST['id']);
$name = addslashes($_POST['name']);
$parent	= addslashes($_POST['parent']);
$name = addslashes($_POST['name']);
$number_id	= addslashes($_POST['number_id']);

//Removendo espaços do sobrenome para a url 
$name = str_replace(' ', '%20', $name);

echo $id;
echo "<br />";
echo $parent;
echo "<br />";
echo $name;
echo "<br />";
echo $number_id;
echo "<br /><br /><br />";

require_once('../../config.php');
require_once('../../call_api.php');
require_once('../../run_curl.php');

$api_function = 'core_course_update_categories';

$url = DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
	. CALLFUNCTION  . $api_function
	. '&categories[0][id]=' . $id
	. '&categories[0][name]=' . $name
	. '&categories[0][idnumber]=' . $number_id
	. '&categories[0][parent]=' . $parent;

	echo $url . "<br /><br />";

//Executando o curl
$response  = run_curl($url);

$result = json_decode($response);

echo "<pre>";
var_dump($result);
echo "</pre>";

if ($result == null) {
	echo "Categoria de curso atualizado com sucesso";
} else {
	echo "Deu ruim! " . $result->message;
}

?>