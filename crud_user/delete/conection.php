<?php

require_once("../../config.php");
require_once("../../call_api.php");
require_once("../../run_curl.php");

$api_function = 'core_user_delete_users';
$user_id	= addslashes($_POST['user_id']);


$url = DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
. CALLFUNCTION  . $api_function
. '&userids[0]=' . $user_id;

//Executando o curl
$response  = run_curl($url);

$result = json_decode($response);

$result_obj = get_object_vars($result);

echo "<pre>";
var_dump($result_obj);
echo "</pre>";

if ($result_obj  == null) {
	echo "Cadastro de usuário excluido com sucesso";
} else {
	echo "Deu ruim! " . $result_obj['message'];
}

?>