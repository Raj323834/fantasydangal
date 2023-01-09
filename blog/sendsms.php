<?php
if ($_POST['mobileno'] && $_POST['mobileno']!='' ) {
$mobile = $_POST['mobileno'];

$message1 = 'Dear Customer, Thanks for choosing FantasyDangal. Click on the link below to download the app - https://bit.ly/2Rctjng' ;
$message = urlencode($message1) ;
$url = 'https://api.vialogue.in/pushapi/sendmsg?username=FantasyAPI&dest='.$mobile.'&apikey=0zn9IjLk5sk7VQKw4lvEhoaGFWVY8xLL&signature=FDANGL&msgtype=PM&msgtxt='.$message.'&entityid=1101452060000051982&templateid=1107164162768725176';

 
$curl = curl_init();
 
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
 
$data = curl_exec($curl);
$res = json_decode($data) ;
$result = curl_close($curl);

print($res->STATUS) ;
} else {echo 'Error'; } 
?>