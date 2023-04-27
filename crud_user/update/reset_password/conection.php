<?php

require_once('../../../config.php');
require_once('../../../call_api.php');
require_once('../../../run_curl.php');


$api_function	= 'core_auth_request_password_reset';

$call_api = DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
. CALLFUNCTION . $api_function;

$reset_method = $_POST['reset_method'];

if ($_POST['reset_method'] == "by_username") {
	$username = addslashes($_POST['username']);
	$url = $call_api . '&username=' . $username;

} elseif ($_POST['reset_method'] == "by_email") {
	$email = addslashes($_POST['email']);
	$url = $call_api . '&email=' . $email;
	
} else { 
	echo "Erro ao tentar redefinir senha";
}

//Executando o curl
$response  = run_curl($url);

$result = json_decode($response);

var_dump($result);

?>