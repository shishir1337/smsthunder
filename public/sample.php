<?php

$parameters = [
        'api_key'    => 'a278b408',
        'api_secret' => 'Ceevber6EqkrIIxQ',
        'from'       => 'info',
        'to'         => '84981557222',
        'text'       => 'test message'
];


try {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://rest.nexmo.com/sms/json');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));

    $headers   = [];
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $get_sms_status = curl_exec($ch);
    if (curl_errno($ch)) {
        $get_sms_status = curl_error($ch);
    }
    curl_close($ch);
} catch (Exception $e) {
    $get_sms_status = $e->getMessage();
}

var_dump($get_sms_status);
