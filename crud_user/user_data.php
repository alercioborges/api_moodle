<?php

function get_user_data($user_id) {

    $api_function = 'core_user_get_users_by_field';

    $url =  DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
    . CALLFUNCTION . $api_function
    . '&field=id'
    . '&values[0]=' . $user_id;

    //Executaldo o curl
    $result  = run_curl($url);

    $result_array = array_values(json_decode($result, true));

    $id = $result_array[0]['id'];
    $firstname = $result_array[0]['firstname'];
    $lastname = $result_array[0]['lastname'];
    $username = $result_array[0]['username'];
    $email = $result_array[0]['email'];

    $user_data = [
        "id" => $id,
        "firstname" => $firstname,
        "lastname"  => $lastname,
        "username"  => $username,
        "email"     => $email,
    ];

    return $user_data;

}

?>