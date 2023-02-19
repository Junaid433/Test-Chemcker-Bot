<?php

if (preg_match_all('/\bstatus\b/', $message)) {
  sendaction($chatId, typing);
   $pm = file_get_contents('Database/pm.txt');
$pms = explode("\n", $pm);
if (in_array($userId, $pms)) {
   $ispm = '<b>✅ Allowed</b>';
}
else {
  $ispm = '<b>❌ Not Allowed</b>';
}
  $ban = file_get_contents('Database/ban.txt');
$bans = explode("\n", $ban);
if (in_array($userId, $bans)) {
   $isban = '<b>❌ User Banned</b>';
}
else {
  $isban = '<b>✅ Not Banned</b>';
}
 $user = file_get_contents('Database/users.txt');
$users = explode("\n", $user);
if (in_array($userId, $users)) {
   $isreg = '<b>✅ Found user in my database!</b>';
  sendMessage($chatId, $isreg, $message_id);
}
else {
  $isreg = '<b>❌ Could not Found user in my database!  Register First</b>';
   sendMessage($chatId, $isreg, $message_id);
  exit();
}
  $sendmes = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=<code>Trying to fech data. Wait...</code>&reply_to_message_id=".$message_id."&parse_mode=HTML";
    $sent = json_decode(file_get_contents($sendmes) ,1);
    $mes_id = $sent['result']['message_id'];
  sleep(2);
editMessage($chatId, "<b>Lookup Success ✅%0A%0AFull Name : $firstname $lastname%0ABanned : $isban%0APM Gates Usage: $ispm%0APM Tools Usage : ✅ Allowed%0AUserId : $userId%0AUsername : @$username </b>",$mes_id);
  }

?>

