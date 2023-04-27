<?php

function get_course_category_data($course_category_id) {

    $api_function = 'core_course_get_categories';
    $criteria_value = $course_category_id;


    $url =  DOMAIN.CALLWS.CALLTOKEN.TOKEN.CALLFORMAT.REST_FORMAT
    . CALLFUNCTION . $api_function
    . '&criteria[0][key]=id'
    . '&criteria[0][value]=' . $criteria_value;


    //Executaldo o curl
    $response  = run_curl($url);

    $result_array = array_values(json_decode($response, true));

    $id = $result_array[0]['id'];
    $name = $result_array[0]['name'];
    $number_id = $result_array[0]['idnumber'];
    $parent = $result_array[0]['parent'];

    $course_category_data = [
        "id" => $id,
        "name" => $name,
        "number_id"  => $number_id,
        "parent"  => $parent,
    ];

    return $course_category_data;

}

?>