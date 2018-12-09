<html>
<head>
<title>count php program </title>
<head>
<body bgcolor="#500000">
<h1 align="center">Page visit info</h1>
<hr>
<font size="20pt" color="white">This page is visited</p>
<font size="20pt" color="yellow">
<?php
$file=fopen("count.txt","r");
$count=fscanf($file,"%d");
fclose($file);
$count[0]++;
$file=fopen("count.txt","w");
fprintf($file,"%d",$count[0]);
fclose($file);
echo $count[0];
?>
</font>
<br>
<font color="white">No of times</p>
</body>
</html>
