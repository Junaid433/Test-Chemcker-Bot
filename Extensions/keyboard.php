<?php

 $rawboard1 = ['inline_keyboard' => [[
           ['text' => 'Gates', 'callback_data' => 'gates'], 
           ['text' => 'Tools', 'callback_data' => 'tools'], 
           ['text' => 'Channel', 'callback_data' => 'channel']],]];

$welcomeboard = json_encode($rawboard1);

$welcomecmd = '<b>Hi, '.$firstname.' [ '.$userId.' ]%0AWhat would you like to checkout first ?</b>';

 $rawback1 = [
    'inline_keyboard' => [[     ['text' => 'Tools', 'callback_data' => 'tools'], ['text' => 'Back', 'callback_data' => 'back'], ]]];

$back = json_encode($rawback1);

 $rawback2 = [
    'inline_keyboard' => [[     ['text' => 'Gates', 'callback_data' => 'gates'], ['text' => 'Back', 'callback_data' => 'back2'], ]]];

$back2 = json_encode($rawback2);

      $channel = json_encode([
'inline_keyboard' => [
[['text' => "CHANNEL", 'url' => "https://t.me/heckerdrops"],
['text' => "GROUP", 'url' => "https://t.me/heckerdropschat"],]
]]);

if ($cdata2 == "gates"){
  $freecommands = urlencode("<b>
All Gates have limit of checking 4 ccs at once.
Stripe $9 - /chk 
PayPal $4 - /pp 
Stripe Auth - /au
Sk Checker - /sk 
Reply to check cc - /rchk [ Stripe $9 ]
</b>");
file_get_contents("https://api.telegram.org/bot$botToken/editMessageText?chat_id=$cchatid2&text=$freecommands&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$back");
}

if ($cdata2 == "tools"){
  $toolcmds = urlencode("<b>
𝗧𝗢𝗢𝗟𝗦 | 𝗨𝗦𝗔𝗚𝗘
𝗦𝗵𝗼𝘄 𝗮𝗰𝗰𝗼𝘂𝗻𝘁 𝘀𝘁𝗮𝘁𝘂𝘀 - /status
𝗜𝗣 𝗟𝗼𝗼𝗸𝘂𝗽 - /ip
𝗕𝗶𝗻 𝗟𝗼𝗼𝗸𝘂𝗽 - /bin
Horrorscope Lookup - /horrorscope virgo
</b>");
file_get_contents("https://api.telegram.org/bot$botToken/editMessageText?chat_id=$cchatid2&text=$toolcmds&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$back2");
}

if ($cdata2 == "channel"){
  $chnnl = urlencode("<b>
𝗖𝗹𝗶𝗰𝗸 𝗮𝗻𝘆 𝗯𝘂𝘁𝘁𝗼𝗻 𝗯𝗲𝗹𝗼𝘄
</b>");
file_get_contents("https://api.telegram.org/bot$botToken/editMessageText?chat_id=$cchatid2&text=$chnnl&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$channel");
}

if ($cdata2 == "back"){
file_get_contents("https://api.telegram.org/bot$botToken/editMessageText?chat_id=$cchatid2&text=$welcomecmd&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$welcomeboard");
}  

if ($cdata2 == "back2"){
file_get_contents("https://api.telegram.org/bot$botToken/editMessageText?chat_id=$cchatid2&text=$welcomecmd&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$welcomeboard");
}    
  
?>
