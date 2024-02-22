 <?php
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $phone = isset($_POST["input1"]) ? $_POST["input1"] : "";
    $password_c = isset($_POST["input2"]) ? $_POST["input2"] : "";

    $conn=mysqli_connect("localhost","root","","clothing") or  die("connection failed");

   $sql = "UPDATE users 
    SET password = '{$password_c}'
    WHERE mobile = '{$phone}'";

    $result=mysqli_query($conn,$sql) or die("query unsuccsesfull");
   
   
    mysqli_close($conn);
 }
   //////////////////////////////////////////////////////////////////
 ?>