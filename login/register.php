<?php
    if(isset($_POST['registerSubmit']))
    {
        $usernameRecord = $_POST['usernameRegister'];
    }

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $con = mysqli_connect($host, $username, $password, $dbname);
    if($conn) { 
        echo "success";  
    }  
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    $sql = "INSERT INTO formEntries (username) VALUES ('$usernameRecord')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);
?>