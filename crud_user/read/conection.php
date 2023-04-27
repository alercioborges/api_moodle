<?php

//definição paraa chamada da API 
require_once('../../config.php');
require_once('../../call_api.php');
require_once('../../run_curl.php');

//Paramatros dachamada da API
$api_function = 'core_user_get_users';
$criteria_key = 'suspended';
$criteria_value = 'false';

//Crianda a url
$url =  DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
. CALLFUNCTION . $api_function
. '&criteria[0][key]=' . $criteria_key
. '&criteria[0][value]=' . $criteria_value;  

//Executando o curl
$response  = run_curl($url);

$result_array = array_values(json_decode($response, true));

//Numero de posições do vetor
$num_position = count($result_array[0]);

?>