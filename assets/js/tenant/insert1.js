var form=document.getElementById('form');

form.addEventListener('submit', function(e){
 e.preventDefault()
 var tenantUsername = document.getElementById("tenantName").value; 
     var tenantMobileNumber = document.getElementById("tenantMobileNumber").value; 
     var tenantEmail = document.getElementById("tenantEmail").value; 
     var tenantJoiningDate = document.getElementById("tenantJoiningDate").value; 
     var tenantComments = document.getElementById("tenantComments").value;
     var tenantAdharCardNumber = document.getElementById("tenantAdharCardNumber").value;
    
     console.log(tenantMobileNumber,tenantUsername,tenantEmail,tenantJoiningDate,tenantComments,tenantAdharCardNumber);
     alert("OK");
 fetch('https://iqbetspro.com/pg-management/tenant-registration-API.php', {
  method: 'POST',
  body: JSON.stringify(
    {
      "tenant_name":"yuva",
      "tenant_email":"yuva@gmail.com",
      "tenant_mobile": "7779955959",
      "tenant_address": "dkjf", 
      "comments":"jan 1st 2013 ",
      "tenant_aadhar_number":124563123,
      "joining_date":"12/12/12"

 }
  ),
  headers: {
    'Content-type': 'application/json; charset=UTF-8',
  }
  })
  .then(function(response){ 
  return response.json()})
  .then(function(data)
  {
    console.log(typeof(data[0].Message));
    //console.log(data[0].Message.response)
     alert("ok");
    if(data[0].Message.response =='error')
    window.location = "tenant.php"
    else
    window.location = "tenant_table.php"

}).catch(error => console.error('Error:', error)); 
});