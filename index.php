<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet"> 
    <link rel='icon' href='/assets/favicon.ico' type='image/x-icon' />
    <script src="https://d3js.org/d3.v6.min.js"></script>
    <link rel="stylesheet" href="style.css">
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    
</head>
<?php
session_set_cookie_params(0);
session_destroy();
?>
<body>

    <h1 class="title" id="top">LOTUS</h1>    
    <div>
        <p class="top" id="i">IP Address Database, get info for any ip address</p>
        <input type="text" id="search1 " name="name" placeholder="yeet">
        <button type="submit" name="submit" value="Submit" class="button" id="myBtn" style="vertical-align:middle"><span>Go</span></button>
        <br><br>
        
<br><br>

<!--
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
-->
</form>
<h2 class="sec" id="out">O U T P U T</h2>
<span><table class="scrollabletextbox" cellspacing="0" cellpadding="0" border-collapse:collapse;>
<tr>
    <th>Tag</th>
    <th>Info</th>
</tr>

<?php 

if(array_key_exists('submit', $_POST)) { 
    button1(); 
}
else {
    include 'load.php';  
} 
function button1() { 
    include 'research.php';
} 
  


?>

</table></span>
        
    </div>
    
    
    <script src="hi.js"></script>
    </body>
</html>