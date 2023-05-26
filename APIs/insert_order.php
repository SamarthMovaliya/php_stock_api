<?php

    header('Access-Control-Allow-Methods: POST');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $r_id = $_POST['r_id'];
        $p_id = $_POST['p_id'];
        $c_id = $_POST['c_id'];
        $quantity = $_POST['quantity'];

        $res = $config->insert_order($r_id, $p_id, $c_id, $quantity);

        if($res) {
            $arr['data'] = 'Order created successfully';
            http_response_code(201);
        } else {
            $arr['data'] = 'Order creation failed';
        }
    } else {
        $arr['data'] = 'Only POST request method is allowed';
    }

    echo json_encode($arr);

?>