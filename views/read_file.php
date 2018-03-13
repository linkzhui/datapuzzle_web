<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
$file = fopen("contact.txt", "r");

//Output a line of the file until the end is reached
$line = fgets($file);
while(! feof($file))
{
	$info = "<p>hello</p>";
	?>
  <?php echo $info; ?>
  <?
  $line = fgets($file);
}

fclose($file);
?>
</body>
</html>
