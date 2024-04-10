<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "clientdb";
    $db_connection = "";
    try{
        $db_connection = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    } catch(mysqli_sql_exception){
        echo "Could not Connect";
    }
    if($db_connection){
        echo "Connected";
    }

    $student_name = "Iro";
    $password = "pardo";
    $hash = password_hash($password,PASSWORD_DEFAULT); 


    $sql  = "INSERT INTO student(studentname,password) VALUES('$student_name','$$hash')";


        try{
            mysqli_query($db_connection,$sql);
            echo "User is created";
        }catch(mysqli_sql_exception){
            echo " Could not register";
        }
        mysqli_close($db_connection);
?>
