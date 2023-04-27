<?php

$user_id	= addslashes($_POST['user_id']);
$firstname	= mb_strtoupper(addslashes($_POST['firstname']));
$lastname	= mb_strtoupper(addslashes($_POST['lastname']));
$username	= addslashes($_POST['username']);
$email		= strtolower(addslashes($_POST['email']));

//Removendo espaços do sobrenome para a url 
$lastname = str_replace(' ', '%20', $lastname);


echo $user_id;
echo "<br />";
echo $firstname;
echo "<br />";
echo $lastname;
echo "<br />";
echo $username;
echo "<br />";
echo $email;
echo "<br /><br /><br />";

require_once('../../config.php');
require_once('../../call_api.php');
require_once('../../run_curl.php');

$api_function = 'core_user_update_users';
$auth = 'manual';

$url = DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
. CALLFUNCTION  . $api_function
. '&users[0][id]=' . $user_id
. '&users[0][username]=' . $username
. '&users[0][auth]=' . $auth
. '&users[0][firstname]=' . $firstname
. '&users[0][lastname]=' . $lastname
. '&users[0][email]=' . $email;

//Executando o curl
$response  = run_curl($url);

$result = json_decode($response);

$result_obj = get_object_vars($result);

echo "<pre>";
var_dump($result_obj);
echo "</pre>";

if ($result_obj  == null) {
	echo "Perfil de usuário atualizado com sucesso";
} else {
	echo "Deu ruim! " . $result_obj['message'];
}

?>