<?php

if(preg_match_all("/\brchk\b/", $message)){
$len = strlen(message);
  if($len <25){
  $message = $r_msg;
  }
else {
  $message = $message;
}
   sendaction($chatId, typing);
  $ban = file_get_contents('Database/ban.txt');
$bans = explode("\n", $ban);
if (in_array($userId, $bans)) {
   sendMessage($chatId, '<b>You have been banned ❌%0AReason : Blacklisted by spam detection.</b>',$message_id);
  exit();
}
      $sendmes = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=<code>Checking PM CC Check Permit. Wait...</code>&reply_to_message_id=".$message_id."&parse_mode=HTML";
    $sent = json_decode(file_get_contents($sendmes) ,1);
    $mes_id = $sent['result']['message_id'];
 $pm = file_get_contents('Database/pm.txt');
$pms = explode("\n", $pm);
if (in_array($chatId, $pms)) {
   $ispm = '<b>✅ You are authorized to use me</b>';
  editMessage($chatId, $ispm,$mes_id);
  $proceed = '<code>Proceeding...</code>';
   editMessage($chatId, $proceed,$mes_id);
  $parse = '<code>Parsing CC from your input...</code>';
   editMessage($chatId, $parse,$mes_id);
$cclist = preg_replace("/[^0-9|\n]/", "",$message);
    $array = explode("\n", $cclist);
  $x = 0;
  $parsecom = 'Parsed!✅%0AStarted Checking CCs. Please wait !';
  $carry = count($array);
   editMessage($chatId, $parsecom,$mes_id);
  if(strlen($array[0] < 28)){
  }
  else{
   editMessage($chatId, " Checking CC : <code>$array[0]</code>",$mes_id);
   if (strlen($array[0]) > 29){
     $array[0] = substr($array[0],0,28);
   }
  $x++;
   $cc1 = file_get_contents('https://oneclass.junaidrahman2.repl.co/api.php?lista='.$array[0].'');
   $msg1 = trim(strip_tags(getStr($cc1,' <br>Result:','</span><br>')));

   $r1 = "<b>CC : <code>$array[0]</code>%0AResult : $msg1%0A</b>";
   editMessage($chatId,"$r1%0A%0A%0AINPUT: $carry Cards %0AChecked : $x Cards ✅",$mes_id);
  }
    if (count($array) < 2){
  exit();
 }
   if(strlen($array[1] < 28)){
  }
  else {
    editMessage($chatId,"$r1%0AChecking CC : <code>$array[1]</code>",$mes_id);
   if (strlen($array[1]) > 28){
     $array[1] = substr($array[1],0,28);
   }
    $x++;
   $cc2 = file_get_contents('https://oneclass.junaidrahman2.repl.co/api.php?lista='.$array[1].'');
   $msg2 = trim(strip_tags(getStr($cc2,' <br>Result:','</span><br>')));
   $r2 = "<b>CC : <code>$array[1]</code>%0AResult : $msg2%0A</b>";
   editMessage($chatId,"%0A$r1%0A$r2%0A%0A%0AINPUT: $carry Cards %0AChecked : $x Cards ✅",$mes_id);
  }
  if (count($array) < 3){
  exit();
 }
  if(strlen($array[2] < 28)){
  
}    else {
  editMessage($chatId,"$r1%0A$r2%0AChecking CC : <code>$array[2]</code>",$mes_id);
   if (strlen($array[2]) > 29){
     $array[2] = substr($array[2],0,28);
   }
  $x++;
   $cc3 = file_get_contents('https://oneclass.junaidrahman2.repl.co/api.php?lista='.$array[2].'');
   $msg3 = trim(strip_tags(getStr($cc3,' <br>Result:','</span><br>')));
   $r3 = "<b>CC : <code>$array[2]</code>%0AResult : $msg3%0A</b>";
   editMessage($chatId,"$r1%0A$r2%0A$r3%0A%0A%0AINPUT: $carry Cards %0AChecked : $x Cards ✅",$mes_id);
}
  if (count($array) < 4){
  exit();
 }
    if(strlen($array[3] < 28)){ 
   } else { editMessage($chatId,"$r1%0A$r2%0A$r3%0AChecking CC : <code>$array[3]</code>",$mes_id);
   if (strlen($array[3]) > 29){
     $array[3] = substr($array[3],0,28);
   }
           $x++;
   $cc4 = file_get_contents('https://oneclass.junaidrahman2.repl.co/api.php?lista='.$array[3].'');
   $msg4 = trim(strip_tags(getStr($cc4,' <br>Result:','</span><br>')));
   $r4 = "<b>CC : <code>$array[3]</code>%0AResult : $msg4%0A</b>";
   editMessage($chatId,"$r1%0A$r2%0A$r3%0A$r4%0A%0A%0AINPUT: $carry Cards %0AChecked : $x Cards ✅",$mes_id);
          }
  if (count($array) < 5){
  exit();
 }
   /** if(strlen($array[4] < 28)){
     
   }
   else {
     editMessage($chatId,"$r1%0A$r2%0A$r3%0A$r4%0AChecking CC : <code>$array[4]</code>",$mes_id);
   if (strlen($array[4]) > 29){
     $array[4] = substr($array[4],0,28);
   }
     $x++;
   $cc5 = file_get_contents('https://oneclass.junaidrahman2.repl.co/api.php?lista='.$array[4].'');
   $msg5 = trim(strip_tags(getStr($cc5,' <br>Result:','</span><br>')));
   $r5 = "<b>CC : <code>$array[4]</code>%0AResult : $msg5%0A</b>";
   editMessage($chatId,"$r1%0A$r2%0A$r3%0A$r4%0A$r5%0A%0%A0AINPUT: $carry Cards %0AChecked : $x Cards ✅",$mes_id);
   }
  if (count($array) < 6){
  exit();
 }
    if(strlen($array[5] < 28)){
  } else { editMessage($chatId,"$r1%0A$r2%0A$r3%0A$r4%0A$r5%0AChecking CC : <code>$array[5]</code>",$mes_id);
   if (strlen($array[5]) > 29){
     $array[5] = substr($array[5],0,28);
   }
          $x++;
   $cc6 = file_get_contents('https://oneclass.junaidrahman2.repl.co/api.php?lista='.$array[5].'');
   $msg6 = trim(strip_tags(getStr($cc6,' <br>Result:','</span><br>')));
   $r6 = "<b>CC : <code>$array[5]</code>%0AResult : $msg6%0A</b>";
   editMessage($chatId,"$r1%0A$r2%0A$r3%0A$r4%0A$r5%0A$r6%0A%0A%0AINPUT: $carry Cards %0AChecked : $x Cards ✅",$mes_id);
         }
  if (count($array) < 7){
  exit();
 }
   if(strlen($array[6] < 28)){
    
  } else {
  editMessage($chatId,"$r1%0A$r2%0A$r3%0A$r4%0A$r5%0A$r6%0AChecking CC : <code>$array[6]</code>",$mes_id);
   if (strlen($array[6]) > 29){
     $array[6] = substr($array[6],0,28);
   }
    $x++;
   $cc7 = file_get_contents('https://oneclass.junaidrahman2.repl.co/api.php?lista='.$array[6].'');
   $msg7 = trim(strip_tags(getStr($cc7,' <br>Result:','</span><br>')));
   $r7 = "<b>CC : <code>$array[6]</code>%0AResult : $msg7%0A</b>";
   editMessage($chatId,"$r1%0A$r2%0A$r3%0A$r4%0A$r5%0A$r6%0A$r7%0A%0A%0AINPUT: $carry Cards %0AChecked : $x Cards ✅",$mes_id);
  }
  if (count($array) < 8){
  exit();
 }
   if(strlen($array[7] < 28)){
     
   } else {
  editMessage($chatId,"$r1%0A$r2%0A$r3%0A$r4%0A$r5%0A$r6%0A$r7%0AChecking CC : <code>$array[7]</code>",$mes_id);
   if (strlen($array[7]) > 29){
     $array[7] = substr($array[7],0,28);
   }
     $x++;
   $cc8 = file_get_contents('https://oneclass.junaidrahman2.repl.co/api.php?lista='.$array[7].'');
   $msg8 = trim(strip_tags(getStr($cc8,' <br>Result:','</span><br>')));
   $r8 = "<b>CC : <code>$array[7]</code>%0AResult : $msg8%0A</b>";
   editMessage($chatId,"$r1%0A$r2%0A$r3%0A$r4%0A$r5%0A$r6%0A$r7%0A$r8%0A%0A%0AINPUT: $carry Cards %0AChecked : $x Cards ✅",$mes_id);
   }
  if (count($array) < 9){
  exit();
 }
 if(strlen($array[8] < 28)){
  
}   else {
  editMessage($chatId,"$r1%0A$r2%0A$r3%0A$r4%0A$r5%0A$r6%0A$r7%0A$r8%0AChecking CC : <code>$array[8]</code>",$mes_id);
   if (strlen($array[8]) > 29){
     $array[8] = substr($array[8],0,28);
   }
  $x++;
   $cc9 = file_get_contents('https://oneclass.junaidrahman2.repl.co/api.php?lista='.$array[8].'');
   $msg9 = trim(strip_tags(getStr($cc9,' <br>Result:','</span><br>')));
   $r9 = "<b>CC : <code>$array[8]</code>%0AResult : $msg9%0A</b>";
   editMessage($chatId,"$r1%0A$r2%0A$r3%0A$r4%0A$r5%0A$r6%0A$r7%0A$r8%0A$r9%0A%0A%0AINPUT: $carry Cards %0AChecked : $x Cards ✅",$mes_id);
}
   if (count($array) < 10){
  exit();
 }
    if(strlen($array[9] < 28)){
      
    }
    else {
  editMessage($chatId,"$r1%0A$r2%0A$r3%0A$r4%0A$r5%0A$r6%0A$r7%0A$r8%0A$r9%0AChecking CC : <code>$array[9]</code>",$mes_id);
   if (strlen($array[9]) > 29){
     $array[9] = substr($array[9],0,28);
   }
$cc10 = file_get_contents('https://oneclass.junaidrahman2.repl.co/api.php?lista='.$array[9].'');
   $msg10 = trim(strip_tags(getStr($cc10,' <br>Result:','</span><br>')));
   $r10 = "<b>CC : <code>$array[9]</code>%0AResult : $msg10%0A</b>";
   editMessage($chatId,"$r1%0A$r2%0A$r3%0A$r4%0A$r5%0A$r6%0A$r7%0A$r8%0A$r9%0A$r10%0A%0A%0AINPUT: $carry Cards %0AChecked : 10 Cards ✅",$mes_id);
    }

  exit();
    */
}
else
 {
   editMessage($chatId, "<b>You are not authorized to use me. Use me on @heckerdrops chat or get usage permit!</b>",$mes_id);
 }
 }

?>