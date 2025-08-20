<?php
$conn = mysqli_connect ("localhost", "root", "psits");
if (!$conn){
    die("Connection failed");
}
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM students WHERE email = '$email' AND password = '$password'";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($conn, $sql) >0){
   header("location: welcome.html");
    exit();
}
else{
    echo "Login Failed";
}
mysqli_close($conn);
?>