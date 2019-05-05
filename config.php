 <?php 
 $hostname = "localhost";
 $user = "root";
 $pass = "";
 $database = "myproject";

 $db = mysqli_connect($hostname,$user,$pass,$database);
 mysqli_set_charset($db, "UTF8");
 $uid= mysqli_query($db,"select admin from tbl_user where admin = 1");





?>

