<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$conn = mysqli_connect("localhost","root","","clothing") or die("connection failed");
// Get form data
$name = isset($_POST["input1"]) ? $_POST["input1"] : "";
$email = isset($_POST["input2"]) ? $_POST["input2"] : "";
$phone_number = isset($_POST["input3"]) ? $_POST["input3"] : "";
$gender = isset($_POST["input4"]) ? $_POST["input4"] : "";
$password = isset($_POST["input5"]) ? $_POST["input5"] : "";

// SQL query to insert data into the database
$sql = "INSERT INTO users (name, email, mobile, gender, password) VALUES ('{$name}', '{$email}', '{$phone_number}', '{$gender}', '{$password}')";

$result=mysqli_query($conn, $sql) or die("Query Unsuccessful");
$response = "Your form has been successfully submitted. ,";
echo $response;



}
else{
    echo "Invalid request method";
}
?>


  

  

 
    
     

   