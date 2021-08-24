<?php
$sql ="INSERT INTO `test`(`name`, `email`, `phone_number`) VALUES ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";
    // Connect to server and select database
     
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','nanzbakz1');
    define('DB','db1_gwalke01');
 
 
    $con = mysqli_connect(HOST,USER,PASSWORD,DB) or die(mysqli_connect_error());

    // Execute sql statement    
    if (mysqli_query($con, $sql) === TRUE) {
        echo "New record created successfully". "<br>" ;

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    $sql = "SELECT * from test";
    
    // Execute sql statement
    $result = mysqli_query($con,$sql);
    
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "$row[name]  $row[email]  $row[phone_number] <br/>";
    }
?>



