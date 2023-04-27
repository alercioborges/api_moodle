<?php

$firstname	= mb_strtoupper(addslashes($_POST['firstname']));
$lastname	= mb_strtoupper(addslashes($_POST['lastname']));
$username	= addslashes($_POST['username']);
$password	= addslashes($_POST['password']);
$email		= strtolower(addslashes($_POST['email']));

//Removendo espaços do sobrenome para a url 
$lastname = str_replace(' ', '%20', $lastname);

echo $firstname;
echo "<br />";
echo $lastname;
echo "<br />";
echo $username;
echo "<br />";
echo $password;
echo "<br />";
echo $email;
echo "<br /><br /><br />";

require_once('../../config.php');
require_once('../../call_api.php');
require_once('../../run_curl.php');

$api_function = 'core_user_create_users';
$auth = 'manual';

$url =	DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
. CALLFUNCTION . $api_function
. '&users[0][username]=' . $username
. '&users[0][auth]=' . $auth
. '&users[0][password]=' . $password
. '&users[0][firstname]=' . $firstname
. '&users[0][lastname]=' . $lastname
. '&users[0][email]=' . $email;

echo $url;

echo "<br /><br />";  

//executaldo o curl
$response  = run_curl($url);

$result = json_decode($response);

$result_obj = get_object_vars($result);

if($result_obj == null) {
	echo "Usuário cadastrado com sucesso.";
} else {
	echo "Deu ruim! " . $result_obj['message'];
}

?>