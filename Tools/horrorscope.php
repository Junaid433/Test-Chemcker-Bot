<?php

if ((strpos($message, "horrorscope") === 0)||(strpos($message, "/horrorscope") === 0)||(strpos($message, ".horrorscope") === 0)){
  
sendaction($chatId, typing);
  
    $sendmes = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=<code>Fetching horrorscope...</code>&reply_to_message_id=".$message_id."&parse_mode=HTML";
  
    $sent = json_decode(file_get_contents($sendmes) ,1);
  
    $mes_id = $sent['result']['message_id'];
  
  $zodaic = substr($message, 13);
  
$r = file_get_contents('https://horoscope-app-api.vercel.app/api/v1/get-horoscope/daily?sign='.$zodaic.'&day=today');
  
  $data = trim(strip_tags(getStr($r,'"horoscope_data":"','"}'))); 
  $zd = strtoupper($zodaic);
editMessage($chatId,"<b>Zodaic Sign : <code>$zd</code></b>%0A%0A$data",$mes_id);

}
