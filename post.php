<?php
header("content-type: text/plain;charset=utf8");
$url = 'https://ipinfo.io/';

//print file_get_contents($url);
print $ch;

// Initialize a CURL session. 
$ch = curl_init();  
  
// Return Page contents. 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  
//grab URL and pass it to the variable. 
curl_setopt($ch, CURLOPT_URL, $url); 
  
$result = curl_exec($ch); 

echo $result;  

?>
