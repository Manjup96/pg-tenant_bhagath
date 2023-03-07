// document.getElementById("tenantJoiningDate").valueAsDate = new Date();

function  tenantReg(){
    //  var username=document.forms.tenantRegistrationForm.tenantUsername.value; 
     var tenantUsername = document.getElementById("tenantName").value; 
     var tenantMobileNumber = document.getElementById("tenantMobileNumber").value; 
     var tenantEmail = document.getElementById("tenantEmail").value; 
     var tenantJoiningDate = document.getElementById("tenantJoiningDate").value; 
     var tenantComments = document.getElementById("tenantComments").value; 
    //  alert(tenantUsername,tenantMobileNumber,tenantEmail,tenantJoiningDate,tenantComments)
        console.log('name=',tenantUsername,tenantMobileNumber,tenantEmail,tenantJoiningDate,tenantComments);
    let url='https://iqbetspro.com/pg-management/tenant-registration-API.php';
        let params={
            "tenant_name":tenantUsername,
            "tenant_email":tenantEmail,
            "tenant_mobile":tenantMobileNumber,
            "tenant_address":"hyd",
            "tenant_aadhar_number":123456789123,
    }
    
      postData(params);
}

async function postData(params)
{
    alert("Startig registration....")
if(params){
    try{
        let result = await fetch('https://iqbetspro.com/pg-management/tenant-registration-API.php', {
        method: 'POST',
        headers: {
          Accept: 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(params),
      }).then((response)=>response.text())
      .then((response)=>{
        var res=JSON.parse(response);
        console.log('response=',res[0].Message)})
        alert("Tenant registered successfully..!");
    }
    catch(e){
        console.log('error',e)
        alert("Tenant registration failed..!");
    }
}
}