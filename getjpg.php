<?php

  header("Content-type: image/jpeg");

  $conn = mysqli_connect("localhost", " mysqlusername "," mysqlpassword ", "databasename ");

  $sql = "SELECT image FROM monster WHERE id='" . $_GET[id] ."';";
	
  $result = mysqli_query($sql, $conn);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row["image"];

  echo $jpg;
?>

