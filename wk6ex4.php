<?php   

    // Connect to server and select database
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DB','assignmentphp');
    
    
    $con = mysqli_connect(HOST,USER,PASSWORD,DB) or die(mysqli_connect_error());
   
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
    <input type=submit name=btnsubmit value="save"/>
</form>
</body>
<?php
    if(isset($_POST['btnsubmit'])){
        $name = $_POST['txtname'];
        $email = $_POST['txtemail'];
        $phone_number = $_POST['txttelno'];

        $sql = "UPDATE `test` SET name='$name',email='$email',phone_number='$phone_number' where name='$_GET[id]' ";

// Execute query
if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
    $row = mysqli_fetch_assoc($result);
    
  } else {
    echo "Error updating record: " . $con->error;
  }

    }
?>

