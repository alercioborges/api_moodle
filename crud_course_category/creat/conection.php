<?php

$parent		= addslashes($_POST['parent']);
$name 		= addslashes($_POST['name']);
$number_id	= addslashes($_POST['number_id']);

//Removendo espaços dos inputs p/ a url 
$name = str_replace(' ', '%20', $name);

echo $parent;
echo "<br />";
echo $name;
echo "<br />";
echo $number_id;
echo "<br />";
echo "<br /><br />";

require_once('../../config.php');
require_once('../../call_api.php');
require_once('../../run_curl.php');

$api_function = 'core_course_create_categories';

$url =	DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
. CALLFUNCTION . $api_function
. '&categories[0][name]=' . $name
. '&categories[0][parent]=' . $parent
. '&categories[0][idnumber]=' . $number_id;

echo $url;

echo "<br /><br />";  

//exexutaldo o curl
$response = run_curl($url);

$result_array = array_values(json_decode($response, true));

$name = str_replace('%20', ' ', $name);
if($result_array[0]['name'] == $name) {
	echo "Categoria de curso criado com sucesso.";
} else {
	echo "Deu ruim! " . $result_array[2];
}

?>