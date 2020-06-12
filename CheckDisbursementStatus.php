<?php

include 'database.php';
$db = new database();


$data = $db->getId();
foreach($data as $row){
	$id = $row['id'];
}

$url = 'https://nextar.flip.id/disburse/$id';
$username = "HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";
$password = "";
$options = array(
    'http' => array(
        'header'  => "Content-Type: application/x-www-form-urlencoded\r\n".
		"Authorization: Basic " . base64_encode("$username:$password"),
        'method'  => 'GET'
    )
);

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

$db->Update_Data($response);
var_dump($response);

?>
