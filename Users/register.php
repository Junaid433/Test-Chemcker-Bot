<?php


if (preg_match_all('/\bregister\b/', $message)) {
  sendaction($chatId, typing);
  $user = file_get_contents('Database/users.txt');
$users = explode("\n", $user);
if (in_array($userId, $users)) {
$result = '<b>❌ You are already registered.</b>';
}
else {
    fwrite(fopen('Database/users.txt', 'a'), $userId."\r\n");
  $result = '<b>✅ You are now registered.</b>';
}
  sendMessage($chatId, $result, $message_id);
}

?>