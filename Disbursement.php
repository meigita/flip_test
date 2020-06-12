<?php
include 'database.php';
$db = new database();

$url = 'https://nextar.flip.id/disburse';
$data = array('bank_code' => 'bni', 'account_number' => '1234567890', 'amount' => '10000', 'remark' => 'sample remark');
$username = "HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";
$password = "";

$options = array(
    'http' => array(
        'header'  => "Content-Type: application/x-www-form-urlencoded\r\n".
		"Authorization: Basic " . base64_encode("$username:$password"),
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$db->InsertData($response);
var_dump($response);

?>