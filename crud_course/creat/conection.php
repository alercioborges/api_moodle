<?php

$fullname	= addslashes($_POST['fullname']);
$shortname	= addslashes($_POST['shortname']);
$category	= addslashes($_POST['category']);

//Removendo espaços dos inputs p/ a url 
$fullname = str_replace(' ', '%20', $fullname);
$shortname = str_replace(' ', '%20', $shortname);

echo $fullname;
echo "<br />";
echo $shortname;
echo "<br />";
echo $category;
echo "<br /><br />";


require_once('../../config.php');
require_once('../../call_api.php');
require_once('../../run_curl.php');

$api_function = 'core_course_create_courses';

$url =	DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
. CALLFUNCTION . $api_function
. '&courses[0][fullname]=' . $fullname
. '&courses[0][shortname]=' . $shortname
. '&courses[0][categoryid]=' . $category;

//exexutaldo o curl
$response = run_curl($url);

$result_array = array_values(json_decode($response, true));

//imprimindo resultado
echo "<pre>";
print_r($result_array);
echo "</pre>";

//Verificando se o curso foi criado
$shortname = str_replace('%20', ' ', $shortname);
if($result_array[0]['shortname'] == $shortname) {
	echo "Curso criado com sucesso.";
} else {
	echo "Deu ruim! " . $result_array[2];
}

?>