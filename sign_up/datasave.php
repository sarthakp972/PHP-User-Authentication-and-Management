<?php
echo "Database_file";
class Database{
    private $db_host="localhost";
    private $db_user="root";
    private $db_pass="";
    private $db_name="clothing";


    private $conn=false;
    private $mysqli ="";
    private $result=array();



    public function __construct(){
        if(!$this->conn)
        {
             $this->mysqli=new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
             $this->conn=true;
           if($this->mysqli->connect_error)
                {
                   array_push($this->result,$this->mysqli->connect_error);
                   return false;
                }
        }            
         else{
                   return true;
             }
           
       }
       ///////////////////////////////
       public function insert($table ,$params=array()){
        if($this->tableExists($table)){
        print_r($params);
            $table_columns=implode(',',array_keys($params));
            $table_values=implode("' , '",$params);
        echo $sql="INSERT INTO $table ($table_columns) VALUES ('$table_values')" ;

        if($this->mysqli->query($sql)){
            array_push($this->result,$this->mysqli->insert_id);
            echo "data saved";
            return true;
        }
        else{
         array_push($this->result,$this->mysqli->error);
            return false;
        }
    }
    else{
        return false;
    }
        
        
        }
        private function tableExists($table){
            $sql="SHOW TABLES FROM $this->db_name  LIKE '$table'";
            $tableInDb=$this->mysqli->query($sql);
            if($tableInDb){
                if($tableInDb->num_rows==1){
                    return true;
                }
                else{
                    array_push($this->result,$table." does not exist in this database.");
                    return false;
                }
            }
        }

        public function getResult(){
            $val =$this->result;
            $this->result=array();
            return $val;
        }

       /////////////////////////////
       public function __destruct(){
        if($this->conn){
                if($this->mysqli->close()){
                    $this->conn=false;
                    return true;
                }
        }
        else{
            return false;
        }
       }
}//class end

    ?>
    
<?php

$obj = new Database();
 
   if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
      $name = isset($_POST["input1"]) ? $_POST["input1"] : "";

  
  
  
      $email = isset($_POST["input2"]) ? $_POST["input2"] : "";
  
      $phone_number = isset($_POST["input3"]) ? $_POST["input3"] : "";
  
  
      $gender = isset($_POST["input4"]) ? $_POST["input4"] : "";
  
      $password = isset($_POST["input5"]) ? $_POST["input5"] : "";
      echo  $name ;
      echo   $email;
      echo    $phone_number;
      echo $gender ;
      echo $password ;
  
  $inserted = $obj->insert('users', [
    'name' => $name,
    'email' => $email,
    'mobile' => $phone_number,
    'gender' => $gender,
    'password' => $password
]);
if ($inserted) {
    echo "User data inserted successfully.";
} else {
    echo "Error inserting user data.";
}
   
   }
   mysqli_close($conn);
?>   

  