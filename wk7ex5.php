<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<h2>Monster Details</h2>
<form enctype="multipart/form-data" method="post">
 Monster name :
 <input type="text" name="txtname" size="15" class="form-control" />
 </br></br>
 Monster image :
 <input  type="file" name="monsterimage" accept="image/jpeg" class="form-control" />
 </br></br>
 Monster Sound :
 <input  type="file" name="monsteraudio" accept="audio/basic" class="form-control"  />
 </br></br>
 <button type="submit" class="btn btn-default" value="Save" name="submit" >Save</button>
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    function InsertInTable($table,&$fields){
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DB','assignmentphp');
    
    
    $con = mysqli_connect(HOST,USER,PASSWORD,DB) or die(mysqli_connect_error());
  
  
        $col = "insert into $table (`".implode("` , `",array_keys($fields))."`)";
        $val = " values('";    
        foreach($fields as $key => $value) {
          $fields[$key] = mysqli_real_escape_string($con,$value);
        }
        $val .= implode("' , '",array_values($fields))."');";   
        $fields = array();
        return;
      }
      $image = $_FILES['monsterimage']['tmp_name']; 
      $audio = $_FILES['monsteraudio']['tmp_name'];
    
      // Get the file binary data
    
      $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
      $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));
      $field['Name'] = '$_POST[txtname]';
      $field['Image'] = '$imagedata';
      $field['Audio'] = '$audiodata';
      InsertInTable("monster",$field);

}
?>



