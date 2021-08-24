<?php   
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','nanzbakz1');
    define('DB','db1_gwalke01');

     $conn = mysqli_connect(HOST,USER,PASSWORD,DB);

       $sql = "select * from lotto";
       $result = mysqli_query($conn,$sql);

       echo "<form action='wk9ex4_display_numbers.php' method='post' >";
       echo "<br/>Select the lottery week ";
       echo "<select name='selweek' >";
       while($row = mysqli_fetch_array($result)) {
  	  echo "<option value='$row[wk]'>$row[wk]</option>";
       }
       echo "</select><br/>";
       echo "<input type='submit' value='Select' />";
       echo "</form>";
?>
