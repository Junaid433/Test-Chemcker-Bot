<?php

include './includeall.php';

if (preg_match_all('/\bstart\b/', $message)) {
  sendaction($chatId, typing);
  sendboard($chatId, $message_id,$welcomeboard,$welcomecmd);
}

?>
