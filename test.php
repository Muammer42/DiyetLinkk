<?php  
$ch = curl_init("https://service.payizone.com/token");
$payload = json_encode( array( "app_id"=> 'c2dbc6f84b097056000a3b2624594f20_n5PeTzZyX8UwVrtxQJ7O', "app_secret" => "4326bef3c3e005e4f484e64d5bdf2a88_ZoCMu8FImpihy6baneU13jAB" ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result);

print_r($result);

