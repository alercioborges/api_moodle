<?php

require_once("../../config.php");
require_once("../../call_api.php");
require_once("../../run_curl.php");

$api_function = 'core_course_delete_categories';
$course_category_id	= addslashes($_POST['course_category_id']);


$url = DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
. CALLFUNCTION  . $api_function
. '&categories[0][id]=' . $course_category_id
. '&categories[0][recursive]=1';

echo $url . "<br /><br />";

//Executando o curl
$response  = run_curl($url);

$result = json_decode($response);

echo "<pre>";
print_r($result);
echo "</pre>";

if ($result == null) {
	echo "Categoria de curso excluida com sucesso";
} else {
	echo "Deu ruim! " . $result->message;
}

?>