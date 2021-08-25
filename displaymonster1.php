<html>
<head></head>
<body>

<?php
  
  define('HOST','localhost');
 define('USER','root');
 define('PASSWORD','');
 define('DB','db1_gwalke01');
 
 
 $con = mysqli_connect(HOST,USER,PASSWORD,DB) or die(mysqli_connect_error());

//$sql = "SELECT * from `monster`";

$sql = "select id,Name,Image from `monster`;";

echo "<table align='center' border='1'>";
echo "<tr><th width='200' align='left'>ID</th><th width='200' align='left'>Name</th><th>Audio</th><th>Image</th></tr>";

$result = mysqli_query( $con,$sql);
while($row = mysqli_fetch_assoc($result)){
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td><a href='getwav.php?id=" .$row['id']. "'>Click to play</a></td>";
  echo '<td><img src="data:image/jpeg;base64,'.base64_encode($row['Image']) .' " style=" height=100 width=100" </td>';
  echo "</tr>";
}

echo "</table>";

?>


