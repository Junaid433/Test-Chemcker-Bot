<?php

if(!empty($new_chat_member)){
  sendaction($chatId, typing);
  sendboard($chatId, $message_id,$welcomeboard,$newmember);
}

?>