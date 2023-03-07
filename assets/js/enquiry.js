function validateName(){

    var name = document.getElementById("enquiryUsername").value;
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

function validateMobileNumber(){
    var mobile = document.getElementById("enquiryMobileNumber").value;
    console.log("MobileNumber=",mobile);

    var mobileRegEX =/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

    if(mobileRegEX.test(mobile))
      {
        
        document.getElementById("mobile_error").style.display = "none";

      } else
        document.getElementById("mobile_error").style.display = "block";    
}

function validateEmail() {
    var email = document.getElementById("enquiryEmail").value;
    console.log("Email =",email);

    var emailRegEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(emailRegEx.test(email))
    {
        document.getElementById("email_error").style.display ="none";

    }else 
        document.getElementById("email_error").style.display = "block";
}


//Enquiry.php script....

/* var form=document.getElementById('enquiry');

form.addEventListener('submit', function(e){
 e.preventDefault()
     var enquiryUsername = document.getElementById("enquiryUsername").value; 
     var enquiryMobileNumber = document.getElementById("enquiryMobileNumber").value; 
     var enquiryEmail = document.getElementById("enquiryEmail").value; 
     //var enquiryJoinDate = document.getElementById("enquiryJoinDate").value; 
     var enquiryRemarks = document.getElementById("enquiryRemarks").value;
     var enquiryReference = document.getElementById("enquiryReference").value;
    // var enquiryAction = document.getElementById("enquiryAction").value;
 fetch('https://iqbetspro.com/pg-management/Enquiry-Tenant-POST-API.php', {
  method: 'POST',
  body: JSON.stringify({
    "Name":enquiryUsername, 
    "Mobile_Number":enquiryMobileNumber, 
    "Email":enquiryEmail,
      "Remarks":enquiryRemarks,
      "Reference":enquiryReference,
      //"Action":enquiryAction 
  }),
  headers: {
    'Content-type': 'application/json; charset=UTF-8',
  }
  })
  .then(function(response){ 
  return response.json()})
  .then(function(data)
  {console.log(typeof(data[0].Message));
    console.log(data[0].Message.response)
     //alert("ok")
    if(data[0].Message.response =='error')
    window.location = "enquiry.php"
    else
    window.location = "enquiry_table.php"

}).catch(error => console.error('Error:', error)); 
}); */