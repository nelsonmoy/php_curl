<?php
$url = "http://www.google.com.mx";
$cc = curl_init($url);  
$url_content =  curl_exec($cc);  
curl_close($cc);  
?>  