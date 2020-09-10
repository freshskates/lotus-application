<?php
$name = "";
$name = $_SERVER['REMOTE_ADDR'];
$url = "https://ipinfo.io/$name";  
$ch = curl_init();  

// set URL and other appropriate options  
curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

// grab URL and pass it to the browser  

$output = curl_exec($ch);  
echo str_ireplace('"readme": "https://ipinfo.io/missingauth"', 'note: L O A D E D  ', $output);

?>