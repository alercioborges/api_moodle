<?php

require_once('../../config.php');
require_once('../../call_api.php');
require_once('../../run_curl.php');

//Chamada da API s/ parametro p/ listar todos
$api_function = 'core_course_get_courses';

//Criando a url
$url =  DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
. CALLFUNCTION . $api_function;

//Executando o curl
$response  = run_curl($url);

$result_array = array_values(json_decode($response, true));

//Numero de posições do vetor
$num_position = count($result_array);

?>