<?php

include "./Database.php";
include "./fetch.php";
$output='';
$chat_message=$_POST['Chat-Message'];
$Fetch=new Chat(new Database);
$result=$Fetch->Search($chat_message);
   
   if($result){
    $output.= $result['Reply'];
   }else{
    $output.= "Sorry Cant Understand This Command";
   }
   
  

echo $output;

?>