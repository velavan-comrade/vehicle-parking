<?php

$fields = array(
    "sender_id" => "PARKING",
    "message" => "Your Time is going to up",
    "language" => "english",
    "route" => "p",
    "numbers" => "8883207600",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: W6HBgIUasmGEcZjyoFlMuAb7VNvdDqz0RCKf5L9Se321JPOr8tcKreXAv5ElfZGItF98pNOTkSqP4MLh",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
Promotional Route Success Response:
{
    "return": true,
    "request_id": "lwdtp7cjyqxvfe9",
    "message": [
        "Message sent successfully to NonDND numbers"
    ]
}
Transactional Route Success Response:
{
    "return": true,
    "request_id": "vrc5yp9k4sfze6t",
    "message": [
        "Message sent successfully"
    ]
}
?>