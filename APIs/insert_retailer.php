<?php

    header('Access-Control-Allow-Methods: POST');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];

        $res = $config->insert_retailer($name, $email, $contact, $password);

        if($res) {
            $arr['data'] = 'Retailer created successfully';
            http_response_code(201);
        } else {
            $arr['data'] = 'Retailer creation failed';
        }
    } else {
        $arr['data'] = 'Only POST request method is allowed...';
    }

    echo json_encode($arr);

?>