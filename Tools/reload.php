<?php

if ((strpos($message, "/reload") === 0)||(strpos($message, "!reload") === 0)||(strpos($message, ".reload") === 0)){
  sendaction($chatId, typing);
      $sendmes = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=<code>Restarting.Please wait...</code>&reply_to_message_id=".$message_id."&parse_mode=HTML";
    $sent = json_decode(file_get_contents($sendmes) ,1);
    $mes_id = $sent['result']['message_id'];
$reload = 'https://api.telegram.org/bot'.$botToken.'/setwebhook?url=https://Test.junaidrahman2.repl.co/bot.php?drop_pending_updates=true&max_connections=1';
  file_get_contents($reload);
  sleep(5);
  editMessage($chatId,"Query Succeeded. All Pending Requestes Dropped.",$mes_id);
} 
