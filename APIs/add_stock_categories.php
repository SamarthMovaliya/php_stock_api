<?php

    header('Access-Control-Allow-Methods: POST');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $stock_categoies = $_POST['stock_categories'];
        

        $res = $config->add_food_categories($stock_categoies);

        if($res) {
            $arr['data'] = 'Category Added Successfully';
            http_response_code(201);
        } else {
            $arr['data'] = 'Unable to add category';
        }
    } else {
        $arr['data'] = 'No other methods are allowed except POST...';
    }

    echo json_encode($arr);

?>