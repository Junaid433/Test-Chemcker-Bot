<?php
if (preg_match_all('/\bmass\b/', $message)) {
  $ban = file_get_contents('Database/ban.txt');
$bans = explode("\n", $ban);
if (in_array($userId, $bans)) {
   sendMessage($chatId, '<b>You have been banned ❌%0AReason : Blacklisted by spam detection.</b>',$message_id);
  exit();
}
  $pm = file_get_contents('Database/pm.txt');
$pms = explode("\n", $pm);
if (in_array($chatId, $pms)) {
        $sendmes = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=<code>Wait...</code>&reply_to_message_id=".$message_id."&parse_mode=HTML";
        $sent = json_decode(file_get_contents($sendmes) ,1);
        $mes_id = $sent['result']['message_id'];
        $cclist = preg_replace("/[^0-9|\n]/", "",$message);
        $array = explode("\n", $cclist);
  $arraylen = count($array);
  
         $new_array = [];
        foreach ($array as $res) {
            
            $cc = file_get_contents('https://oneclass.junaidrahman2.repl.co/fever.php?lista='.$res.'');
            $msg = trim(strip_tags(getStr($cc,' <br>Result:','</span><br>')));
            $i = "CC : $res%0AResult : $msg";
           
          $new_array[] = $i;
        $edit = "$new_array[0]%0A$new_array[1]%0A$new_array[2]%0A$new_array[3]%0A$new_array[4]%0A$new_array[5]%0A$new_array[6]%0A$new_array[7]%0A$new_array[8]%0A$new_array[9]%0A$new_array[10]%0A$new_array[11]%0A$new_array[12]%0A$new_array[13]%0A$new_array[14]%0A$new_array[15]%0A$new_array[16]%0A$new_array[17]%0A$new_array[18]%0A$new_array[19]%0A$new_array[20]%0A$new_array[21]%0A$new_array[22]%0A$new_array[23]%0A$new_array[24]%0A$new_array[25]%0A$new_array[26]%0A$new_array[27]%0A$new_array[28]%0A$new_array[29]%0A$new_array[30]%0A$new_array[31]%0A$new_array[32]%0A$new_array[33]%0A$new_array[34]%0A$new_array[35]%0A$new_array[36]%0A$new_array[37]%0A$new_array[38]%0A$new_array[39]%0A$new_array[40]%0A$new_array[41]%0A$new_array[42]%0A$new_array[43]%0A$new_array[44]%0A$new_array[45]%0A$new_array[46]%0A$new_array[47]%0A$new_array[48]%0A$new_array[49]%0A$new_array[50]%0A$new_array[51]%0A$new_array[52]%0A$new_array[53]%0A$new_array[54]%0A$new_array[55]%0A$new_array[56]%0A$new_array[57]%0A$new_array[58]%0A$new_array[59]%0A$new_array[60]%0A$new_array[61]%0A$new_array[62]%0A$new_array[63]%0A$new_array[64]%0A$new_array[65]%0A$new_array[66]%0A$new_array[67]%0A$new_array[68]%0A$new_array[69]%0A$new_array[70]%0A$new_array[71]%0A$new_array[72]%0A$new_array[73]%0A$new_array[74]%0A$new_array[75]%0A$new_array[76]%0A$new_array[77]%0A$new_array[78]%0A$new_array[79]%0A$new_array[80]%0A$new_array[81]%0A$new_array[82]%0A$new_array[83]%0A$new_array[84]%0A$new_array[85]%0A$new_array[86]%0A$new_array[87]%0A$new_array[88]%0A$new_array[89]%0A$new_array[90]%0A$new_array[91]%0A$new_array[92]%0A$new_array[93]%0A$new_array[94]%0A$new_array[95]%0A$new_array[96]%0A$new_array[97]%0A$new_array[98]%0A$new_array[99]%0A$new_array[100]%0A$new_array[101]%0A";
editMessage($chatId,$edit,$mes_id);

      }
}
}