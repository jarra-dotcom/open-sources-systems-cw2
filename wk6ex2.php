<?php	

     // Connect to server and select database
     
     define('HOST','localhost');
     define('USER','root');
     define('PASSWORD','nanzbakz1');
     define('DB','db1_gwalke01');
  
  
     $con = mysqli_connect(HOST,USER,PASSWORD,DB) or die(mysqli_connect_error());
 
	$sql = "SELECT * from test";
	// Execute sql statement
    $result = mysqli_query($con,$sql);
	
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action_delete.php?id=$row[name]\">$row[name]</a></br>";  	
}
?>
</body>
</html>
