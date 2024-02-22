 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>SignUP Form</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    

 <div class="container-fluid d-flex align-items-center justify-content-center vh-100">
           <div class="card">
                <div class="card-body">

                    <h1 class="text-center mb-3 ">SignUP Form</h1>
                        <div class="text-center">
                            <!-- 1 page -->

                            <div id="phase1">

<div class="flex d-flex justify-content-start mt-2">
      <h5 >Basic Info:</h5>
      </div>

  <div class="mb-3">
  <div class="flex justify-content-start">
    <label for="name" class="form-label">Name</label>
</div>
    <input type="text"  class="form-control" placeholder="name greater than 3 char" name="name" id="name">

</div>

  <div class="mb-3">
    <label for="email" class="form-label" >Email</label>
    <input type="email" class="form-control" placeholder="example123@gmail.com"   name="email" id="email">
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label" >Phone</label>
    <input type="number" placeholder=" 10 digit phone number " class="form-control" name="phone" id="phone">
  </div>
 
  <button  onclick="nextPhase()" id="hello" class="btn btn-primary ">Next</button>
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

                <select class="form-control" id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

</div>

  <div class="mb-3">
    <label for="password" class="form-label" >Password</label>
    <input type="Password" class="form-control" name="password" id="password">
  </div>

  <div class="mb-3">
    <label for="C_password" class="form-label" >Confirm Password</label>
    <input type="Password" class="form-control" name="C_Password" id="C_password">
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

                         </div>
                </div>
            </div>
</div>        
<script>

        $("#phase1").show();
        $("#phase2").hide();
        
// ////////////////////////////////////////////
// var name1 = $("#name").val();
 
   


</script> 
<script src="index.js"></script>       
 </body>
</html>                        