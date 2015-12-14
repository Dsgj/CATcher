<?php
 myFunction()
{
  $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "test.php");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $output = curl_exec($ch);
 curl_close($ch);
 return $output 
}
?>
