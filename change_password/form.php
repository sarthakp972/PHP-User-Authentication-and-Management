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
    <div class="container-fluid d-flex align-items-center justify-content-center vh-100">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center mb-3">Forget Password</h1>
                <div class="text-center">
                    <div id="phase1">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" placeholder="10 digit phone number" class="form-control" name="phone" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>

                     
                     
                        <button onclick="login1()" id="hello" class="btn btn-primary">Next</button>
                    </div>
                    <!-- /////////////////////////////////////////////////////// -->
                    <div id="phase2">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Password</label>
                            <input type="password" placeholder="Enter a password" class="form-control" name="pass" id="update_password">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control"  placeholder="Enter a confirm password" name="password" id="confirm_password">
                        </div>

                     
                     
                        <button onclick="update()" id="udate" class="btn btn-primary">Update Password</button>
                    </div>
                    <!-- //////////////////////////////////////////////////////// -->
                </div>
            </div>
        </div>
    </div>
    
    <script>
            $("#phase1").show();
        $("#phase2").hide();


//////////////////////////////////////////////////////////////////////////        

        function login1() {
            let phone = $("#phone").val();
            let password = $("#password").val();
            
            if (phone.length != 10) {
                alert("Phone number should be 10 digits");
            } else {
                console.log(phone,password)
                $.ajax({
                    url: "exist_data.php",
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
    </script> 

 
</body>
</html>
