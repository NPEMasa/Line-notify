<?php

$url = "https://notify-api.line.me/api/notify";
if(!empty($_GET['msg'])){
  $msg = $_GET['msg'];
}else{
  $msg = "Test messages.";
}

$line_token = "<Your API Key>";
$payload = array(
    'message'=>$msg,
);
$payload = http_build_query($payload);
$options = stream_context_create(
    array(
      'http' => array(
        'method'=>'POST',
        'header'=>'Authorization: Bearer '.$line_token,
        'content'=>$payload,
      )
    )
);

$html = file_get_contents($url, false, $options);
echo $html;
?>
