<?php   

    // Connect to server and select database
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','nanzbakz1');
    define('DB','db1_gwalke01');
    
    $con = mysqli_connect(HOST,USER,PASSWORD,DB) or die(mysqli_connect_error());
    $id=$_GET['id'];
    $sql = "SELECT * from test where name = '$_GET[id]' ";
    // Execute query
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action="" method="post">

    Name :
    <input type=text name=txtname value="<?php echo $row['name'] ?>" />
    </br>
    Phone number :
    <input type=text name=txttelno value="<?php echo $row['phone_number'] ?>" />
    </br>
    Email :
    <input type=text name=txtemail value="<?php echo $row['email'] ?>" />
    </br>
    <input type=submit name=delete value="delete"/>
</form>
</body>
<?php
    if(isset($_POST['delete'])){
       $sql="DELETE FROM `test` WHERE `test`.`name` = '$_GET[id]' ";

// Execute query
if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleted record: " . $con->error;
  }
  
  $con->close();
}
?>
