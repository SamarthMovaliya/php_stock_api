<?php

    header('Access-Control-Allow-Methods: POST');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $company_names = $_POST['company_names'];
        

        $res = $config->add_food_company($company_names);

        if($res) {
            $arr['data'] = 'company Added Successfully';
            http_response_code(201);
        } else {
            $arr['data'] = 'Unable to add company';
        }
    } else {
        $arr['data'] = 'No other methods are allowed except POST...';
    }

    echo json_encode($arr);

?>