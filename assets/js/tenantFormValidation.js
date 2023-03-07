// alert(" Inside tenatn form ");

 
function validateName(){

    var name = document.getElementById("tenantName").value;
     console.log("Name=",name);

    var nameRegEx= /^([\w"."]{1,})+([\w\s]{0,})+$/i; 

    if(nameRegEx.test(name))
      {
        // console.log("true");
      document.getElementById("name_error").style.display="none";
    }
    else
       document.getElementById("name_error").style.display="block";  
        // console.log("Error");

}

function validateAdhar(){
  // var adhar = document.getElementById("tenantAdharCardNumber").value;
  // console.log("Adhar=",adhar);

  // var adharRegEX = /^[2-9]{1}[0-9]{3}\s{1}[0-9]{4}\s{1}[0-9]{4}$/;

  // if(adharRegEX.test(adhar))
  //   {
      
  //     document.getElementById("adhar_error").style.display = "none";

  //   } else
  //     document.getElementById("adhar_error").style.display = "block";    
}



function validateMobileNumber(){
    var mobile = document.getElementById("tenantMobileNumber").value;
    console.log("MobileNumber=",mobile);

    var mobileRegEX =/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

    if(mobileRegEX.test(mobile))
      {
        
        document.getElementById("mobile_error").style.display = "none";

      } else
        document.getElementById("mobile_error").style.display = "block";    
}

function validateEmail() {
    var email = document.getElementById("tenantEmail").value;
    console.log("Email =",email);

    var emailRegEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(emailRegEx.test(email))
    {
        document.getElementById("email_error").style.display ="none";

    }else 
        document.getElementById("email_error").style.display = "block";
}



var button = document.querySelector('.save-button');
var regEx = /\S+@\S+\.\S+/; // string, white-space, @ , white-space, dot, white-space, value, string //
var form = document.querySelector('.form');

function validateForm(){
    if (inputName.value !== "" && regEx.test(inputEmail.value) && inputMessage.value !== ""){
       button.style.backgroundColor = '4b8aa7';
       button.disabled = false;
    } else {
       button.style.backgroundColor = '#c5dce7';
       button.disabled = true;
    }
}
form.addEventListener('save', function(event){
     event.preventDefault();
     console.log("saved")

})


//function validateSubmit() {
 // var submit = document.getElementById('tenantSubmit').value;
  //if (submit.value != '') {
    //  bt.disabled = false;
  //}
  //else {
    //  bt.disabled = true;
  //}
//}


