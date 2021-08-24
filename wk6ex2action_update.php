<?php	

    $txtname = $_POST['txtname'];
    $txtPhoneNumber = $_POST['txttelno'];
    $txtEmail = $_POST['txtemail'];

    $sql ="UPDATE `test` SET phone_number = '$txtPhoneNumber', email = '$txtEmail' WHERE name = '$txtname'";
    
     // Connect to server and select database
     
     define('HOST','localhost');
     define('USER','root');
     define('PASSWORD','nanzbakz1');
     define('DB','db1_gwalke01');
  
  
    $con = mysqli_connect(HOST,USER,PASSWORD,DB) or die(mysqli_connect_error());

    if (mysqli_query($con, $sql) === TRUE) {
        echo "record updated successfully". "<br>" ;

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
 
	$sql = "SELECT * from `test` WHERE name = '$txtname'";
	// Execute sql statement
    $result = mysqli_query($con,$sql);
	
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
    echo "$row[name]  $row[email]  $row[phone_number] <br/>";
}
?>
</body>
</html>