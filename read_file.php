<?php
$file = fopen("contact.txt", "r");

//Output a line of the file until the end is reached
$line = fgets($file);
while(! feof($file))
{
  echo $line. "<br />";
  $line = fgets($file);
}

fclose($file);
?>