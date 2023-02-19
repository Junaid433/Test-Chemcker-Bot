<?php

if ((strpos($message, "sk") === 0)){
  sendaction($chatId, typing);
  $ban = file_get_contents('Database/ban.txt');
$bans = explode("\n", $ban);
if (in_array($userId, $bans)) {
   sendMessage($chatId, '<b>You have been banned ❌%0AReason : Blacklisted by spam detection.</b>',$message_id);
  exit();
}
      $sendmes = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=<code>Parsing SKs wait...</code>&reply_to_message_id=".$message_id."&parse_mode=HTML";
    $sent = json_decode(file_get_contents($sendmes) ,1);
    $mes_id = $sent['result']['message_id'];
    $array = explode("\n", $message);
    $carray = count($array);
editMessage($chatId, "Checking SK : <code>$array[0]</code>",$mes_id);
     $sks1 = file_get_contents('https://oneclass.junaidrahman2.repl.co/sk.php?sk='.$array[0].'');
  $stat1 = trim(strip_tags(getStr($sks1,'Result:<b>','<br>')));
 $sk1 = trim(strip_tags(getStr($sks1,'<br><br>KEY : ','<br>')));
$res1 = trim(strip_tags(getStr($sks1,'<br>RESPONSE :','<br>')));
  $bal1 = trim(strip_tags(getStr($sks1,'<br>BALANCE :','<br>')));
    $pen1 = trim(strip_tags(getStr($sks1,'<br>PENDING AMOUNT :','<br>')));
    $curr1 = trim(strip_tags(getStr($sks1,'<br>CURRENCY :','<br>')));
  $sk1f = "<b>$stat1%0A%0AKEY : <code>$sk1</code>%0ARESPONSE : $res1%0ABALANCE : $bal1%0APENDING AMOUNT : $pen1%0ACURRENCY : $curr1</b>";
  editMessage($chatId, "$sk1f%0A%0A%0AINPUT : $carray SKs%0AChecked : 1 SKs ✅",$mes_id);
    if (count($array) < 2){
  exit();
 }
  editMessage($chatId, "$sk1f%0A%0AChecking SK : <code>$array[1]</code>",$mes_id);
     $sks2 = file_get_contents('https://oneclass.junaidrahman2.repl.co/sk.php?sk='.$array[1].'');
  $stat2 = trim(strip_tags(getStr($sks2,'Result:<b>','<br>')));
 $sk2 = trim(strip_tags(getStr($sks2,'<br><br>KEY : ','<br>')));
$res2 = trim(strip_tags(getStr($sks2,'<br>RESPONSE :','<br>')));
  $bal2 = trim(strip_tags(getStr($sks2,'<br>BALANCE :','<br>')));
    $pen2 = trim(strip_tags(getStr($sks2,'<br>PENDING AMOUNT :','<br>')));
    $curr2 = trim(strip_tags(getStr($sks2,'<br>CURRENCY :','<br>')));
  $sk1f2 = "<b>$stat2%0A%0AKEY : <code>$sk2</code>%0ARESPONSE : $res2%0ABALANCE : $bal2%0APENDING AMOUNT : $pen2%0ACURRENCY : $curr2</b>";
  editMessage($chatId, "$sk1f%0A%0A$sk1f2%0A%0A%0AINPUT : $carray SKs%0AChecked : 2 SKs ✅",$mes_id);
    if (count($array) < 3){
  exit();
 }
  editMessage($chatId, "$sk1f%0A%0A$sk1f2%0A%0AChecking SK : <code>$array[2]</code>",$mes_id);
     $sks3 = file_get_contents('https://oneclass.junaidrahman2.repl.co/sk.php?sk='.$array[2].'');
  $stat3 = trim(strip_tags(getStr($sks3,'Result:<b>','<br>')));
 $sk3 = trim(strip_tags(getStr($sks3,'<br><br>KEY : ','<br>')));
$res3 = trim(strip_tags(getStr($sks3,'<br>RESPONSE :','<br>')));
  $bal3 = trim(strip_tags(getStr($sks3,'<br>BALANCE :','<br>')));
    $pen3 = trim(strip_tags(getStr($sks3,'<br>PENDING AMOUNT :','<br>')));
    $curr3 = trim(strip_tags(getStr($sks3,'<br>CURRENCY :','<br>')));
  $sk1f3 = "<b>$stat3%0A%0AKEY : <code>$sk3</code>%0ARESPONSE : $res3%0ABALANCE : $bal3%0APENDING AMOUNT : $pen3%0ACURRENCY : $curr3</b>";
  editMessage($chatId, "$sk1f%0A%0A$sk1f2%0A%0A$sk1f3%0A%0A%0AINPUT : $carray SKs%0AChecked : 3 SKs ✅",$mes_id);
    if (count($array) < 4){
  exit();
 }
   editMessage($chatId, "$sk1f%0A%0A$sk1f2%0A%0A$sk1f3%0A%0AChecking SK : <code>$array[3]</code>",$mes_id);
     $sks4 = file_get_contents('https://oneclass.junaidrahman2.repl.co/sk.php?sk='.$array[3].'');
  $stat4 = trim(strip_tags(getStr($sks4,'Result:<b>','<br>')));
 $sk4 = trim(strip_tags(getStr($sks4,'<br><br>KEY : ','<br>')));
$res4 = trim(strip_tags(getStr($sks4,'<br>RESPONSE :','<br>')));
  $bal4 = trim(strip_tags(getStr($sks4,'<br>BALANCE :','<br>')));
    $pen4 = trim(strip_tags(getStr($sks4,'<br>PENDING AMOUNT :','<br>')));
    $curr4 = trim(strip_tags(getStr($sks4,'<br>CURRENCY :','<br>')));
  $sk1f4 = "<b>$stat4%0A%0AKEY : <code>$sk4</code>%0ARESPONSE : $res4%0ABALANCE : $bal4%0APENDING AMOUNT : $pen4%0ACURRENCY : $curr4</b>";
  editMessage($chatId, "$sk1f%0A%0A$sk1f2%0A%0A$sk1f3%0A%0A$sk1f4%0A%0A%0AINPUT : $carray SKs%0AChecked : 4 SKs ✅",$mes_id);
    if (count($array) < 5){
  exit();
 }
   editMessage($chatId, "$sk1f%0A%0A$sk1f2%0A%0A$sk1f3%0A%0A$sk1f4%0A%0AChecking SK : <code>$array[4]</code>",$mes_id);
     $sks5 = file_get_contents('https://oneclass.junaidrahman2.repl.co/sk.php?sk='.$array[4].'');
  $stat5 = trim(strip_tags(getStr($sks5,'Result:<b>','<br>')));
 $sk5 = trim(strip_tags(getStr($sks5,'<br><br>KEY : ','<br>')));
$res5 = trim(strip_tags(getStr($sks5,'<br>RESPONSE :','<br>')));
  $bal5 = trim(strip_tags(getStr($sks5,'<br>BALANCE :','<br>')));
    $pen5 = trim(strip_tags(getStr($sks5,'<br>PENDING AMOUNT :','<br>')));
    $curr5 = trim(strip_tags(getStr($sks5,'<br>CURRENCY :','<br>')));
  $sk1f5 = "<b>$stat5%0A%0AKEY : <code>$sk5</code>%0ARESPONSE : $res5%0ABALANCE : $bal5%0APENDING AMOUNT : $pen5%0ACURRENCY : $curr5</b>";
  editMessage($chatId, "$sk1f%0A%0A$sk1f2%0A%0A$sk1f3%0A%0A$sk1f4%0A%0A$sk1f5%0A%0A%0AINPUT : $carray SKs%0AChecked : 5 SKs ✅",$mes_id);
    if (count($array) < 6){
  exit();
 }
      }
elseif ((strpos($message, "/sk") === 0)||(strpos($message, "!sk") === 0)||(strpos($message, ".sk") === 0)){
  sendaction($chatId, typing);
  $ban = file_get_contents('Database/ban.txt');
$bans = explode("\n", $ban);
if (in_array($userId, $bans)) {
   sendMessage($chatId, '<b>You have been banned ❌%0AReason : Blacklisted by spam detection.</b>',$message_id);
  exit();
}
      $sendmes = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=<code>Parsing SKs wait...</code>&reply_to_message_id=".$message_id."&parse_mode=HTML";
    $sent = json_decode(file_get_contents($sendmes) ,1);
    $mes_id = $sent['result']['message_id'];
  $message = substr($message, 4);
    $array = explode("\n", $message);
    $carry = count($array);
editMessage($chatId, "Checking SK : <code>$array[0]</code>",$mes_id);
     $sks1 = file_get_contents('https://oneclass.junaidrahman2.repl.co/sk.php?sk='.$array[0].'');
  $stat1 = trim(strip_tags(getStr($sks1,'Result:<b>','<br>')));
 $sk1 = trim(strip_tags(getStr($sks1,'<br><br>KEY : ','<br>')));
$res1 = trim(strip_tags(getStr($sks1,'<br>RESPONSE :','<br>')));
  $bal1 = trim(strip_tags(getStr($sks1,'<br>BALANCE :','<br>')));
    $pen1 = trim(strip_tags(getStr($sks1,'<br>PENDING AMOUNT :','<br>')));
    $curr1 = trim(strip_tags(getStr($sks1,'<br>CURRENCY :','<br>')));
  $sk1f = "<b>$stat1%0A%0AKEY : <code>$array[0]</code>%0ARESPONSE : $res1%0ABALANCE : $bal1%0APENDING AMOUNT : $pen1%0ACURRENCY : $curr1</b>";
  editMessage($chatId, "$sk1f%0A%0A%0AINPUT : $carray SKs%0AChecked : 1 SKs ✅",$mes_id);
    if (count($array) < 2){
  exit();
 }
  editMessage($chatId, "$sk1f%0A%0AChecking SK : <code>$array[1]</code>",$mes_id);
     $sks2 = file_get_contents('https://oneclass.junaidrahman2.repl.co/sk.php?sk='.$array[1].'');
  $stat2 = trim(strip_tags(getStr($sks2,'Result:<b>','<br>')));
 $sk2 = trim(strip_tags(getStr($sks2,'<br><br>KEY : ','<br>')));
$res2 = trim(strip_tags(getStr($sks2,'<br>RESPONSE :','<br>')));
  $bal2 = trim(strip_tags(getStr($sks2,'<br>BALANCE :','<br>')));
    $pen2 = trim(strip_tags(getStr($sks2,'<br>PENDING AMOUNT :','<br>')));
    $curr2 = trim(strip_tags(getStr($sks2,'<br>CURRENCY :','<br>')));
  $sk1f2 = "<b>$stat2%0A%0AKEY : <code>$array[1]</code>%0ARESPONSE : $res2%0ABALANCE : $bal2%0APENDING AMOUNT : $pen2%0ACURRENCY : $curr2</b>";
  editMessage($chatId, "$sk1f%0A%0A$sk1f2%0A%0A%0AINPUT : $carray SKs%0AChecked : 2 SKs ✅",$mes_id);
    if (count($array) < 3){
  exit();
 }
  editMessage($chatId, "$sk1f%0A%0A$sk1f2%0A%0AChecking SK : <code>$array[2]</code>",$mes_id);
     $sks3 = file_get_contents('https://oneclass.junaidrahman2.repl.co/sk.php?sk='.$array[2].'');
  $stat3 = trim(strip_tags(getStr($sks3,'Result:<b>','<br>')));
 $sk3 = trim(strip_tags(getStr($sks3,'<br><br>KEY : ','<br>')));
$res3 = trim(strip_tags(getStr($sks3,'<br>RESPONSE :','<br>')));
  $bal3 = trim(strip_tags(getStr($sks3,'<br>BALANCE :','<br>')));
    $pen3 = trim(strip_tags(getStr($sks3,'<br>PENDING AMOUNT :','<br>')));
    $curr3 = trim(strip_tags(getStr($sks3,'<br>CURRENCY :','<br>')));
  $sk1f3 = "<b>$stat3%0A%0AKEY : <code>$array[2]</code>%0ARESPONSE : $res3%0ABALANCE : $bal3%0APENDING AMOUNT : $pen3%0ACURRENCY : $curr3</b>";
  editMessage($chatId, "$sk1f%0A%0A$sk1f2%0A%0A$sk1f3%0A%0A%0AINPUT : $carray SKs%0AChecked : 3 SKs ✅",$mes_id);
    if (count($array) < 4){
  exit();
 }
   editMessage($chatId, "$sk1f%0A%0A$sk1f2%0A%0A$sk1f3%0A%0AChecking SK : <code>$array[3]</code>",$mes_id);
     $sks4 = file_get_contents('https://oneclass.junaidrahman2.repl.co/sk.php?sk='.$array[3].'');
  $stat4 = trim(strip_tags(getStr($sks4,'Result:<b>','<br>')));
 $sk4 = trim(strip_tags(getStr($sks4,'<br><br>KEY : ','<br>')));
$res4 = trim(strip_tags(getStr($sks4,'<br>RESPONSE :','<br>')));
  $bal4 = trim(strip_tags(getStr($sks4,'<br>BALANCE :','<br>')));
    $pen4 = trim(strip_tags(getStr($sks4,'<br>PENDING AMOUNT :','<br>')));
    $curr4 = trim(strip_tags(getStr($sks4,'<br>CURRENCY :','<br>')));
  $sk1f4 = "<b>$stat4%0A%0AKEY : <code>$array[3]</code>%0ARESPONSE : $res4%0ABALANCE : $bal4%0APENDING AMOUNT : $pen4%0ACURRENCY : $curr4</b>";
  editMessage($chatId, "$sk1f%0A%0A$sk1f2%0A%0A$sk1f3%0A%0A$sk1f4%0A%0A%0AINPUT : $carray SKs%0AChecked : 4 SKs ✅",$mes_id);
    if (count($array) < 5){
  exit();
 }
   editMessage($chatId, "$sk1f%0A%0A$sk1f2%0A%0A$sk1f3%0A%0A$sk1f4%0A%0AChecking SK : <code>$array[4]</code>",$mes_id);
     $sks5 = file_get_contents('https://oneclass.junaidrahman2.repl.co/sk.php?sk='.$array[4].'');
  $stat5 = trim(strip_tags(getStr($sks5,'Result:<b>','<br>')));
 $sk5 = trim(strip_tags(getStr($sks5,'<br><br>KEY : ','<br>')));
$res5 = trim(strip_tags(getStr($sks5,'<br>RESPONSE :','<br>')));
  $bal5 = trim(strip_tags(getStr($sks5,'<br>BALANCE :','<br>')));
    $pen5 = trim(strip_tags(getStr($sks5,'<br>PENDING AMOUNT :','<br>')));
    $curr5 = trim(strip_tags(getStr($sks5,'<br>CURRENCY :','<br>')));
  $sk1f5 = "<b>$stat5%0A%0AKEY : <code>$array[4]</code>%0ARESPONSE : $res5%0ABALANCE : $bal5%0APENDING AMOUNT : $pen5%0ACURRENCY : $curr5</b>";
  editMessage($chatId, "$sk1f%0A%0A$sk1f2%0A%0A$sk1f3%0A%0A$sk1f4%0A%0A$sk1f5%0A%0A%0AINPUT : $carray SKs%0AChecked : 5 SKs ✅",$mes_id);
    if (count($array) < 6){
  exit();
 }
      }

?>

