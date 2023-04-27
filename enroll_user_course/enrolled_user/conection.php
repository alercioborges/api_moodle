<?php

function get_enrolled_users_data($course_id) {

	require_once('../../config.php');
	require_once('../../call_api.php');
	require_once('../../run_curl.php');

	$api_function = 'core_enrol_get_enrolled_users';

	$url = DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
	. CALLFUNCTION  . $api_function
	. '&courseid=' . $course_id;

	//Executando o curl
	$response = run_curl($url);

	$result_array = array_values(json_decode($response, true));
	
	if($result_array[0] == 'dml_missing_record_exception') {
		echo "Deu ruim! " . $result_array[2];
		die();
	}
	
	//Numero de posições do vetor
	$num_position = count($result_array);

	//Passando os valores da array
	for($i = 0; $i < $num_position; $i++) {

		$id = $result_array[$i]['id'];
		$fullname = $result_array[$i]['fullname'];
		$email = $result_array[$i]['email'];
		$roleid = $result_array[$i]['roles'][0]['roleid'];
		$role_shortname = $result_array[$i]['roles'][0]['shortname'];

		$enrolled_users_data[$i] = array(
			"id" => $id,
			"fullname" => $fullname,
			"email" => $email,
			"roleid" => $roleid,
			"role_shortname" => $role_shortname,		
		);
	}

	return $enrolled_users_data;
}

?>