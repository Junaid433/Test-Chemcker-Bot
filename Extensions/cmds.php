<?php

if (preg_match_all('/\bcmds\b/', $message)) {
  sendaction($chatId, typing);
  sendboard($chatId, $message_id,$welcomeboard,$cmdtext);
}

?>