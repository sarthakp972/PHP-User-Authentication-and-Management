



function nextPhase(){
    let name1 = $("#name").val();
let email = $("#email").val();
let phone = $("#phone").val();

let index1=email.indexOf(".");
let index2=email.indexOf("@");




 if(phone.length<10||phone.length>10 || name1.length<=3 || index1==-1||index2==-1){
//   console.log("index1==-1||index2==-1",index1,index2);
//   console.log("phone.length==10",phone.length);
//   console.log("name1.length>=3",name1.length);


  alert("error here");

 }
   else{
    

    $("#phase1").hide();
    $("#phase2").show();
   }
}//function end



function previous(){
    $("#phase1").show();
    $("#phase2").hide();
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
console.log("submit else");
   $.ajax({
    url: "datasave.php",
    type: "POST",
    data: { input1:name1,input2:email,input3:phone,input4:gender,input5:password},
    success: function(response) {
        alert("Thank you!");
    },
    error: function(xhr, status, error) {
        alert("Error: " + status + "\nMessage: " + error);
    }
});

////////////////////////////////////////////////////////////////

            alert("Your form is submitted")
        }
}