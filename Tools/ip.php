<?php

if ((strpos($message, "/ip") === 0)||(strpos($message, "!ip") === 0)||(strpos($message, ".ip") === 0)){
sendaction($chatId, typing);
      $sendmes = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=<code>Wait...</code>&reply_to_message_id=".$message_id."&parse_mode=HTML";
    $sent = json_decode(file_get_contents($sendmes) ,1);
    $mes_id = $sent['result']['message_id'];
  editMessage($chatId,'<code>Parsing IP. Wait...</code>',$mes_id);
    $iplist = preg_replace("/[^0-9.]/", "",$message);
    if(empty($iplist)){
      editMessage($chatId, 'No IPs found',$mes_id);
      exit();
    }
    $array = explode("\n", $iplist);
    editMessage($chatId,'Parsed IP ✅%0AStarted Checking IP',$mes_id);
editMessage($chatId, "Checking IP : <code>$array[0]</code>", $mes_id);
   $gip = file_get_contents('https://scamalytics.com/ip/'.$array[0].'');
      $msg = trim(strip_tags(getStr($gip,'   <div style="border-bottom: 1px solid #CCCCCC"><b>IP Fraud Risk API</b></div>
        <pre style="margin: 0; text-transform: lowercase;">','</pre>
        <div style="border-top: 1px solid #CCCCCC"><a href="/ip/api/pricing">Click here</a> for details of our <a href="/ip/api/pricing">free usage tier</a>, <a href="/ip/api/pricing">free trial</a>, and <a href="/ip/api/pricing">pricing information</a>.</div>')));


$score = trim(strip_tags(getStr($gip,'"ip":"'.$array[0].'",
  "score":"','",')));
  
  $risk = $country = trim(strip_tags(getStr($gip,'"ip":"'.$array[0].'",
  "score":"'.$score.'",
  "risk":"','"
}')));
  
$country = trim(strip_tags(getStr($gip,'   </tr>
        <tr>
            <th>Country Name</th>','   </tr>
        <tr>')));
  $isp = trim(strip_tags(getStr($gip,'   </tr>
        <tr>
            <th>ISP Name</th>','   </tr>
        <tr>')));

editMessage($chatId, "<b>IP Lookup Sucessful✅%0A%0AIP : $array[0]%0AScore : $score%0ARisk : $risk%0AISP : $isp%0ACountry : $country</b>", $mes_id);
}
?>


