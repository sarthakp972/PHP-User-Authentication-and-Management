<?php
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $phone = isset($_POST["input1"]) ? $_POST["input1"] : "";
    $password= isset($_POST["input2"]) ? $_POST["input2"] : "";
     $password_u = isset($_POST["input3"]) ? $_POST["input3"] : "";
    $password_c = isset($_POST["input4"]) ? $_POST["input4"] : "";

    $conn=mysqli_connect("localhost","root","","clothing") or  die("connection failed");

   $sql = "UPDATE users 
    SET password = '{$password_c}'
    WHERE mobile = '{$phone}'  AND password =  '{$password}'";

    $result=mysqli_query($conn,$sql) or die("query unsuccsesfull");
   
    // $row = mysqli_num_rows($result);

    // if($row>0){
    //     // UPDATE users 
    //     // SET password = 'new_password' 
    //     // WHERE username = 'sarthak' AND password = '1234';
        

    //     echo "successfully change";
       
     


    // }
    // else{
    //     $response = "you are not login";
    //     echo $response;
    // }
    mysqli_close($conn);
 }
   //////////////////////////////////////////////////////////////////
 ?>