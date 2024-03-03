<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="profile.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    

 <div class="container-fluid d-flex align-items-center justify-content-center vh-100  bg-danger-subtle text-danger-emphasis">
           <div class="card">
                <div class="card-body bg-info-subtle">

                    <h1 class="text-center mb-3 bg-info-subtle " id="sign">SignUP Form</h1>
                        <div class="text-center">
                            <!-- 1 page -->

                            <div id="phase1" class="bg-info-subtle">

<div class="flex d-flex justify-content-start mt-2">
      <h5 >Basic Info:</h5>
      </div>

  <div class="mb-3">
  <div class="flex justify-content-start">
    <label for="name" class="form-label">Name</label>
</div>
    <input type="text"  class="form-control bg-danger-subtle" placeholder="name greater than 3 char" name="name" id="name">

</div>

  <div class="mb-3">
    <label for="email" class="form-label" >Email</label>
    <input type="email" class="form-control bg-danger-subtle" placeholder="example123@gmail.com"   name="email" id="email">
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label " >Phone</label>
    <input type="number" placeholder=" 10 digit phone number " class="form-control bg-danger-subtle" name="phone" id="phone">
  </div>
 
  <button  onclick="nextPhase()" id="hello" class=" btn btn-primary ">Next</button>
  </div>

                            <!-- end 1 page -->
                            <!-- /////////////////////////////////////////////// -->

                            <!-- start 2nd page -->

                            <div id="phase2">

<div class="flex d-flex justify-content-start mt-2">
      <h5 >Basic Info</h5>
      </div>

  <div class="mb-3">
  <div class="flex justify-content-start">
  <label for="gender">Gender:</label>
</div>

                <select class="form-control bg-danger-subtle" id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

</div>

  <div class="mb-3">
    <label for="password" class="form-label" >Password</label>
    <input type="password" placeholder="Insert Password" class="form-control bg-danger-subtle" name="password" id="password">
  </div>

  <div class="mb-3">
    <label for="C_password" class="form-label" >Confirm Password</label>
    <input type="password" placeholder="Insert Confirm Password" class="form-control bg-danger-subtle" name="C_Password" id="C_password">
  </div>
<!-- Check -->
  <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required="">
          <label class="form-check-label" for="invalidCheck2">
            Agree to terms and conditions
          </label>
        </div>
      </div>
      <!-- Check end -->
  <button  onclick="previous()" id="pre" class="btn btn-primary ">previous</button>
  <button  onclick="submit()" id="submit" class="btn btn-primary ">Submit</button>
  </div>

                            <!-- end 2nd page -->

                            <!-- 3rd page start -->
                      
   <div id="phase3">
    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="circle-frame">
        <img src="img\profile_photo1.jpeg" alt="Your Image">
        </div>
        <div>
            <p id="your_name"></p>
        </div>
        <div>
            <a href="hello.php">Continue with your profile</a>
        </div>
    </div>
</div>
                      <!-- 3rd page end -->


                         </div>
                </div>
            </div>
</div>        
<script>

        $("#phase1").show();
        $("#phase2").hide();
        $("#phase3").hide();
        
// ////////////////////////////////////////////
// var name1 = $("#name").val();
 
   


</script> 
<!-- <script src="index.js"></script>        -->
<script>
  function nextPhase(){
    console.log("nextphase");
let name1 = $("#name").val();
let email = $("#email").val();
let phone = $("#phone").val();

let index1=email.indexOf(".");
let index2=email.indexOf("@");


if(name1.length<=3){
alert("please Enter a valid name");
}

else if( index1==-1||index2==-1){
    alert("please Enter a valid email");   

}

 else if(phone.length<10||phone.length>10 ){

//   console.log("phone.length==10",phone.length);
//   console.log("name1.length>=3",name1.length);
  alert("please enter 10 digit phone number");
 }

   else{
    

    $("#phase1").hide();
    $("#phase2").show();
    $("#phase3").hide();
   }
}//function end



function previous(){
    $("#phase1").show();
    $("#phase2").hide();
    $("#phase3").hide();
}



function submit(){
    var gender = $("#gender").val();
    var C_password =  $("#C_password").val();
    var password = $("#password").val();
    var agreeCheckbox = document.getElementById("invalidCheck2");

    let name1 = $("#name").val();
    let email = $("#email").val();
    let phone = $("#phone").val();

    if(password != C_password){
        alert("Please password should same.");  
    }
    else if (gender=="") {
        alert("Gender is req..");
        }

    else if (!agreeCheckbox.checked) {
        alert("Please agree to the terms and conditions.");
        }

       
        else{

//////////////////////////////////////////////////////////////////
console.log(name1);
console.log(email);
console.log(phone);
console.log(gender);
console.log(password);
   $.ajax({
    url: "datasave.php",
    type: "POST",
    data: { input1:name1,input2:email,input3:phone,input4:gender,input5:password},

    success: function(response) {
      console.log(response)
    
    
        alert("Thank you!");
        alert(response);
       ///////////////////////////////////////////////////////////////// for phase3
     
       $(document).ready(function() {
       
        var your_name = name1;
        
       
        $("#your_name").text(your_name);
        $("#sign").text("Profile");
    
    });
    $("#phase1").hide();
    $("#phase3").show();
    $("#phase2").hide();

///////////////////////////////////////////////// for phase3 end

    },
    error: function(xhr, status, error) {
        alert("Error: " + status + "\nMessage: " + error);
        console.log("error");
    }
});

////////////////////////////////////////////////////////////////

          
        }
}
</script>
 </body>
</html>                        