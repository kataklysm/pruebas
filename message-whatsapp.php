<?php
$arr = json_encode(array(
    "phone" => "525574253118",
    "body" => "Este mensage fue enviado desde codigo PHP"
));
$url =  "https://eu184.chat-api.com/instance205315/message?token=2uh38o1o4a8lqkcq";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-type:application/json',
    'content-length:' . strlen($arr)
));
$result = curl_exec($ch);
curl_close($ch);
echo $result;
dsda
?>