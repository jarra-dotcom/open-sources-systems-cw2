<?php	

	// Connect to server and select database

	$sql = "SELECT * from test where name = '$_GET[id]’ ”;
	// Execute query
	$row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action=” ” method=”post”>

	Name :
	<input type=text name=txtname value="<? echo $row[name] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value="<? echo $row[phone_number] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<? echo $row[email] ?>" />
	</br>
	<input type=submit name=btnsubmit value="save"/>
</form>
</body>
