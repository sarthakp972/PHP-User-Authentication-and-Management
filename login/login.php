
 
 <?php
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
     $phone = isset($_POST["input1"]) ? $_POST["input1"] : "";
    $password = isset($_POST["input2"]) ? $_POST["input2"] : "";

    $conn=mysqli_connect("localhost","root","","clothing") or  die("connection failed");
    $sql = $sql = "SELECT * FROM users WHERE mobile = '$phone' AND  password = '$password'";
    $result=mysqli_query($conn,$sql) or die("query unsuccsesfull");
    $row = mysqli_num_rows($result);

    if($row>0){
        // session_start();
        // $_SESSION['loginp'] = 'login';
        // session_write_close();

        echo "Login successful";
        // header("Location: next_page.php");
        // exit;
     


    }
    else{
        $response = "Account not exist ";
        echo $response;
    }
 }
   //////////////////////////////////////////////////////////////////
 ?>
