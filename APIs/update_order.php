<?php

    header('Access-Control-Allow-Methods: PUT, PATCH');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'PATCH') {

        parse_str(file_get_contents('php://input'), $_u);

        $res = $config->update_order($_u['r_id'], $_u['p_id'], $_u['c_id'],$_u['quantity'] $_u['id']);

        if($res == 1) {
            $arr['data'] = 'order updated successfully';
        } else {
            $arr['data'] = 'order updation failed';
        }

    } else {
        $arr['data'] = 'use either PUT or PATCH request methods';
    }

    echo json_encode($arr);

?>