<?php
ini_set('display_errors',1);
$to = "glorykk318@gmail.com";
$subject = "My subject123";
$txt = "Hello world!";
$headers = "From: dealerportal@gmail.com" . "\r\n" ."CC: zhangwei0425@gmail.com";
$result = mail($to,$subject,$txt,$headers);
var_dump($result);

?>