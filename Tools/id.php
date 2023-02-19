<?php

if (preg_match_all('/\bid\b/', $message)) {
  sendaction($chatId, typing);
   $sendmes = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=<code>Fetching Data. Wait...</code>&reply_to_message_id=".$message_id."&parse_mode=HTML";
   $user = file_get_contents('Database/users.txt');
$users = explode("\n", $user);
if (in_array($userId, $users)) {
  $indb = 'Yes'; } else {
  $indb = 'No';
  }
  sleep(2);
    $sent = json_decode(file_get_contents($sendmes) ,1);
    $mes_id = $sent['result']['message_id'];
  if(empty($r_userId)) {
    $r_userId = $userId;
    $r_username = $username;
  }
  else {
  editMessage($chatId,"<b>Lookup Success ✅%0A%0AUserId : <code>$r_userId</code>%0AUsername : @$r_username%0ARegistered on bot : $indb</b>",$mes_id);
}
}