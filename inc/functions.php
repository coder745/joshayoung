<?php

function getTwitterStatus($userid){
$url = "http://twitter.com/statuses/user_timeline/$userid.xml?count=1";

$xml = simplexml_load_file($url) or die("could not connect");

       foreach($xml->status as $status){
       $text = $status->text;
       }
       echo $text;
 }

?>