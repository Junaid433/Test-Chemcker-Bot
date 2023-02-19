<?php

function sendMessage ($chatId, $message, $message_id){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);
};

function delMessage ($chatId, $message_id){
$url = $GLOBALS[website]."/deleteMessage?chat_id=".$chatId."&message_id=".$message_id."";
file_get_contents($url);
};

function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};

function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}

function editMessage ($chatId, $message,$message_id){
$url = "https://api.telegram.org/bot5980177112:AAF2saZaYIej03yT5_UE3Gbjlpgi1g7tnyw/editMessageText?chat_id=".$chatId."&message_id=".$message_id."&text=".$message."&parse_mode=HTML";
file_get_contents($url);      
}

function sendaction ($chatId, $action){
$url = $GLOBALS[website]."/sendChatAction?chat_id=".$chatId."&action=".$action."";
file_get_contents($url);
};

function sendboard($chatId,$message_id,$keyboard,$message) {
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML&reply_markup=".$keyboard."";
file_get_contents($url);
}

function makearray($message){
    return explode("\n", $message);
}

?>