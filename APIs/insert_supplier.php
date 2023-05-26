<?php

    header('Access-Control-Allow-Methods: POST');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = $_POST['supplier_name'];
        $email = $_POST['email'];
        $contact_no = $_POST['contact_no'];
        $company_id = $_POST['company_id'];

        $res = $config->insert_supplier($username, $email, $contact_no, $company_id);

        if($res) {
            $arr['data'] = 'Supplier created successfully...';
            http_response_code(201);
        } else {
            $arr['data'] = 'Supplier creation failed...';
        }
    } else {
        $arr['data'] = 'Only POST request method is allowed...';
    }

    echo json_encode($arr);

?>