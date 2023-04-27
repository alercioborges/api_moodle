<?php

function get_course_data($course_id) {

    $api_function = 'core_course_get_courses_by_field';

    $url =  DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
    . CALLFUNCTION . $api_function
    . '&field=id'
    . '&value=' . $course_id;

    //Executaldo o curl
    $response  = run_curl($url);

    //Convertendo para vetor
    $result_array = array_values(json_decode($response, true));
    
    $id = $result_array[0][0]['id'];
    $fullname = $result_array[0][0]['fullname'];
    $shortname = $result_array[0][0]['shortname'];
    $category = $result_array[0][0]['categoryid'];

    $course_data = [
        "id" => $id,
        "fullname" => $fullname,
        "shortname"  => $shortname,
        "category"  => $category,
    ];

    return $course_data;

}

?>