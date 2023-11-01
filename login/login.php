<?php
session_start();
 if(isset($_POST['loginSubmit']))
 {
    $usernameLogin = $_POST['usernameLogin'];
}

$host = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$con = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM formEntries WHERE username='$usernameLogin'";
$result = mysqli_query($con, $sql);

if ($result->num_rows >=1) {
    $_SESSION['username'] = $usernameLogin;
    header("Location: welcome.php");
    exit();
} else {
    echo "Vale kasutajanimi";
}

mysqli_close($con);
?>
