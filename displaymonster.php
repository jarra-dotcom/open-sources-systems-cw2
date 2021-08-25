<html>
<head></head>
<body>

<?php
  
  define('HOST','localhost');
  define('USER','root');
  define('PASSWORD','');
  define('DB','db1_gwalke01');
  
  
  $con = mysqli_connect(HOST,USER,PASSWORD,DB) or die(mysqli_connect_error());

$sql = "select id from monster;";

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

echo "<img src='getjpg.php?id=" . $row['id']. "'/>";

?>


