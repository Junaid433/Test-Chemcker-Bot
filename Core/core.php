<?php

$botToken =  "5980177112:AAF2saZaYIej03yT5_UE3Gbjlpgi1g7tnyw";
$website = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$e = print_r($update);
$cchatid2 = $update["callback_query"]["message"]["chat"]["id"];
$cmessage_id2 = $update["callback_query"]["message"]["message_id"];
$cdata2 = $update["callback_query"]["data"];
$username = $update["message"]["from"]["username"];
$chatId = $update["message"]["chat"]["id"]; 
$chatusername = $update["message"]["chat"]["username"]; 
$chatname = $update["message"]["chat"]["title"]; 
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"]; 
$firstname = $update["message"]["from"]["first_name"]; 
$username = $update["message"]["from"]["username"]; 
$message = $update["message"]["text"]; 
$new_chat_member = $update["message"]["new_chat_member"];
$newusername = $update["message"]["new_chat_member"]["username"];
$newgId = $update["message"]["new_chat_member"]["id"];
$newfirstname = $update["message"]["new_chat_member"]["first_name"];
$message_id = $update["message"]["message_id"]; 
$r_id = $update["message"]["reply_to_message"];
$r_userId = $update["message"]["reply_to_message"]["from"]["id"];  
$r_firstname = $update["message"]["reply_to_message"]["from"]["first_name"];  
$r_username = $update["message"]["reply_to_message"]["from"]["username"]; 
$r_msg_id = $update["message"]["reply_to_message"]["message_id"]; 
$r_msg = $update["message"]["reply_to_message"]["text"]; 
$sender_chat = $update["message"]["sender_chat"]["type"]; 

?>