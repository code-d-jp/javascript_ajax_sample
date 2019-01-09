<?php
$mail = $_POST["mail"]; // out of use.

header('content-type: application/json; charset=utf-8');
echo '{"type": 0, "message": "success"}';

// $json = ["type" => 1, "message" => "success"];
// echo json_encode($json);
