<?php

if (preg_match_all('/\bapprove\b/', $message)) {
if ($userId == '766109755'){
$uid = substr($message, 8);
  fwrite(fopen('Database/pm.txt', 'a'), $uid."\r\n");
sendMessage($chatId, "<b>✅ Success%0AChatID : $uid is now allowed to use me.</b>", $message_id);
}
}
elseif (preg_match_all('/\bauthorize\b/', $message)) {
if ($userId == '766109755'){
$uid = $chatId;
  fwrite(fopen('Database/pm.txt', 'a'), $uid."\r\n");
sendMessage($chatId, "<b>✅ Success%0AChatID : $uid is now allowed to use me.</b>", $message_id);
}
}
  ?>