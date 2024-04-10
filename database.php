<?php
  $db_server = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "admindb";
  $db_connection = "";
  
try{
    $db_connection = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
}catch(mysqli_sql_exception){
    echo "<h1> Could not connect</h1>";
}
 if($db_connection){
    echo "<h1> Connected</h1>";
 }
 $email = "alexander@gmail.com";
 $password = "pogiako";
 $sql  = "INSERT INTO myadmin (email, password) VALUES ('$email', '$password')"; 
 try{
    mysqli_query($db_connection, $sql);
    echo "User Created";
 }
catch(mysqli_sql_exception){
    echo "Could not Register";
}


  mysqli_close($db_connection);
?>