<?php
// define variables and set to empty values
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["name"])) $name = $_SERVER['REMOTE_ADDR'];
  else {
  $name = test_input($_POST["name"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$url = "https://ipinfo.io/$name";  
$ch = curl_init();  

// set URL and other appropriate options  
curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

// grab URL and pass it to the browser  

$output = curl_exec($ch);  
//$list = getBetween($output, '"', '"');
$list = preg_split('/[:,]/', $output);

//$list = preg_match('/"(.*?)"/', $output, $list);
//echo $list[1];
//$list = array_map('ltrim', $list, array_fill(0, count($list), '"'));
$n = count($list);
for($i=0; $i < $n-2; $i+=2){
  if($i != 10){
    echo "<tr><td>".$i.$list[$i]."</td><td>".$i.$list[$i+1]."</td></tr>";
  }
  else{
    echo "<tr><td>".$i.$list[$i]."</td><td>".$i.$list[$i+1].$list[$i+2]."</td></tr>";
    $i++;    
  }
  
}
//echo "<td>".str_ireplace('"readme": "https://ipinfo.io/missingauth"', 'note: L O T U S ', $output)."</td>";
/*
$n = strlen($output); 
for($i=0; $i < $n; $i++){
    
    echo $output[$i];
    
}
*/
?>