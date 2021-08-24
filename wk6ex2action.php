<?php	
       // Connect to server and select database
     
       define('HOST','localhost');
       define('USER','root');
       define('PASSWORD','nanzbakz1');
       define('DB','db1_gwalke01');
    
    
       $con = mysqli_connect(HOST,USER,PASSWORD,DB) or die(mysqli_connect_error());

	$sql = "SELECT * from test where name = '$_GET[id]' ";

	// Execute query
    $result = mysqli_query($con,$sql);

	$row = mysqli_fetch_assoc($result);
?>

<html>
<body>

<form action="wk6ex2action_update.php" method="post">

    Name :
    <input type=text name=txtname value="<?php echo $row['name'] ?>"  readonly/>
    </br>
    Phone number :
    <input type=text name=txttelno value="<?php echo $row['phone_number'] ?>" />
    </br>
    Email :
    <input type=text name=txtemail value="<?php echo $row['email'] ?>" />
    </br>
    <input type=submit name=btnsubmit value="save"/>
</form>

</body>
