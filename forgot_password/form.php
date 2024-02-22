<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forget password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid d-flex align-items-center bg-info justify-content-center vh-100">
        <div class="card">
            <div class="card-body bg-info-subtle">
                <h1 class="text-center mb-3">Signup Form</h1>
                <div class="text-center">
                    <div id="phase1"  >
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" placeholder="10 digit phone number" class="form-control" name="phone" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="mb-3">
                          <p class="text-primary text-decoration-underline" style="cursor: pointer;" onclick="forget_password()">forget password</p>
                        </div>  

                     
                     
                        <button onclick="login1()" id="hello" class="btn btn-primary">Login</button>
                    </div>
                    <!-- /////////////////////////////////////////////////////// -->
                    <div id="phase2">
                        <div class="mb-3">
                            <label for="phone" class="form-label">phone</label>
                            <input type="password" placeholder="Enter a number" class="form-control" name="pass" id="otp_phone">
                        </div>
                        <div class="mb-3">
                        <label for="phone" class="form-label">Otp</label>
                        <input type="password" placeholder="Enter a otp" class="form-control" name="pass" id="otp">
                        </div>

                     
                     
                        <button onclick="otp()"  class="btn btn-primary">Genrate otp & Next</button>
                        <!-- <button onclick="submit()"  class="btn btn-primary">Submit</button> -->
                    </div>
                    <!--  -->
                    <div id="phase3">
                    <div class="mb-3">
                            <label for="password_first" class="form-label">Password</label>
                            <input type="password" placeholder="enter a password" class="form-control" name="phone" id="password_first">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Confirm Password</label>
                            <input type="password" placeholder="enter a confirm password"  class="form-control" name="password_confirm" id="password_confirm">
                        </div>  
                        <button onclick="submit()"  class="btn btn-primary">Submit</button>  
                       
                    </div>

                    <!-- //////////////////////////////////////////////////////// -->
                </div>
            </div>
        </div>
    </div>
    
    <script>
            $("#phase1").show();
        $("#phase2").hide();
        $("#phase3").hide();


//////////////////////////////////////////////////////////////////////////        

        function login1() {
            let phone = $("#phone").val();
            let password = $("#password").val();
            
            if (phone.length != 10) {
                alert("Phone number should be 10 digits");
            } else {
                console.log(phone,password)
                $.ajax({
                    url: "exist.php",
                    type: "POST",
                    data: { input1: phone, input2: password },
                    success: function(response) {
                      
                    alert("Thank you! " + response); 
                    console.log(response);
                    if (response.trim() === "Login successful") {
                        $("#phase1").hide();
                         $("#phase2").show();
        
                    }
                },
                    error: function(xhr, status, error) {
                        alert("Error: " + status + "\nMessage: " + error);
                    }
                });
            }
        }
        //////////////////////////////////////////////////////////////////////////////
        function update(){ 
            let phone = $("#phone").val();
            let password = $("#password").val();
            let update_password = $("#update_password").val();
            let confirm_password= $("#confirm_password").val();
            
            if(update_password!=confirm_password){
                alert("password should be same");
            }
            else{

            

            console.log(phone,password,confirm_password,update_password);
                $.ajax({
                    url: "update.php",
                    type: "POST",
                    data: { input1: phone, input2: password ,input3:update_password, input4:confirm_password},
                    success: function(response) {
                      
                alert("your password change")
                location.reload();
                  
                },
                    error: function(xhr, status, error) {
                        alert("Error: " + status + "\nMessage: " + error);
                    }
                });
            }//else part end
        }//function end

        ///////////////////////////////////////////////////////////////////////////////////////
function forget_password(){

    $("#phase1").hide();
        $("#phase2").show();


}
// var globle;
// //////////////////////////////////////////////////////////////////////////////////////
function otp() {

    let phone = $("#otp_phone").val();
    console.log(phone);
    // globle=phone;

           
            
            if (phone.length != 10) {
                alert("Phone number should be 10 digits");
            } else {
                console.log(phone);
                $.ajax({
                    url: "otp_phone.php",
                    type: "POST",
                    data: { input1: phone},
                    success: function(response) {
                      
                    // alert("Thank you! " + response); 
                    console.log(response);
                    if (response.trim() === "Login successful") {
                        let otp = Math.floor(1000 + Math.random() * 9000);
                        alert("otp - " +otp)
                        $("#otp").val(otp);
                        let pk = $("#otp").val();
                        console.log(pk);
                       
                         $("#phase1").hide();
                         $("#phase2").hide();
                         $("#phase3").show();
                        
                                return phone;

        
                    }
                    else{
                        alert("phone number not exist");
                    }
                
                },
                    error: function(xhr, status, error) {
                        alert("Error: " + status + "\nMessage: " + error);
                    }
                });
            }
    // /////////////////////////////////////////////////////////////////////////////////////

            
            }        


            function submit(){
          
                let phone = $("#otp_phone").val();


       

        
        let password_first = $("#password_first").val();
        let password_confirm = $("#password_confirm").val();
      
        console.log("phone",phone);
        if(password_confirm!=password_first){
                alert(" password are not same both fields")
        }
        else {
                console.log(phone,password_confirm);
                $.ajax({
                    url: "update.php",
                    type: "POST",
                    data: { input1: phone ,input2:password_confirm},
                    success: function(response) {
                      
                    alert("Thank you! your password updated " + response);
                    window.location.reload(); 
                    console.log(response);

                   
                
                },
                    error: function(xhr, status, error) {
                        alert("Error: " + status + "\nMessage: " + error);
                    }
                });
            }


            }
    </script> 

 
</body>
</html>
