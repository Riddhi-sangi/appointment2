<?php
$servername = "localhost";
$username = "root";
$password = "riddhi29may";
$dbanme = "appointments";

$conn = new mysqli($servername,$username,$password,$dbanme);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}
//Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    //prepare and execute the database insertion
    $sql = "INSERT INTO `registration`(`name`, `email`,`date`, `time`)
     VALUES ('$name','$email','$date','$time')";

     if($conn->query($sql) == TRUE){
        echo "Booking Successfully";
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }
}
$conn->close();
?>