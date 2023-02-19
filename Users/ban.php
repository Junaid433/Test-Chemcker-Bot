<?php

if (preg_match_all('/\bban\b/', $message)) {
if ($userId == '766109755'){
$uid = substr($message, 4);
  $len = strlen($uid);
if ($len<6) {
  $uid = $r_userId;
}
else {
  $uid = $uid;
}
  fwrite(fopen('Database/ban.txt', 'a'), $uid."\r\n");
sendMessage($chatId, "<b>✅ Success%0AChatID : $uid is now banned.</b>", $message_id);
}
}


  ?>