  
        // to show pop up 
        document.getElementById("show_edit_form").style.display="none";
        document.getElementById("show_table").style.display="block";


    var form=document.getElementById('tenant');

    form.addEventListener('submit', function(e){
     e.preventDefault()
    
     var id=  document.getElementById("id_value").value; 
        var mobile= document.getElementById("tenantMobileNumber").value;
         var name= document.getElementById("tenantName").value;
        var email= document.getElementById("tenantEmail").value;
        var AdharCardNumber = document.getElementById("tenantAdharCardNumber").value;
        var comments =  document.getElementById("tenantComments").value;
        var joining_date =  document.getElementById("tenantJoiningDate").value;
     console.log(id,mobile,name,email,joining_date);
         alert("Clicked on Save button...");
    
         fetch('https://iqbetspro.com/pg-management/update-Tenant-Registered-Details-API.php', {
      method: 'POST',
      body: JSON.stringify(
        {
        "id":id,
     "tenant_name":name,
    "tenant_email":email,
    "tenant_mobile":mobile,
    "tenant_aadhar_number":AdharCardNumber, 
    "comments":comments,
    "joining_date":joining_date
    
    }
      ),
      headers: {
        'Content-type': 'application/json; charset=UTF-8',
      }
      })
      .then(function(response){ 
      return response.json()})
      .then(function(data)
      {console.log(typeof(data[0].Message));
        console.log(data[0].Message.response);
         //alert("ok")
        if(data[0].Message.response =='error')
        window.location = "tenant.php";
        else
        {console.log("Updated Successfully...");
          window.location = "tenant_table.php";}
    
    }).catch(error => alert('Error:', error)); 
    });

    
    function edit_row(id){
        //alert(id);
                  fetch('https://iqbetspro.com/pg-management/single-Tenant-Reg-GET-Details-API.php', {
                  method: 'POST',
                  body: JSON.stringify({
            "id":id
           })
          })
          .then(function(response){ 
          return response.json()})
          .then(function(data)
          {
            console.log('Tenant row Data= ',data);
            
              document.getElementById("show_edit_form").style.display="block";
              document.getElementById("show_table").style.display="none";
        
             document.getElementById("id_value").value=data[0].id;
             document.getElementById("tenantMobileNumber").value=data[0].tenant_mobile;
              document.getElementById("tenantName").value = data[0].tenant_name;
             document.getElementById("tenantEmail").value =  data[0].tenant_email;
             document.getElementById("tenantAdharCardNumber").value =  data[0].tenant_aadhar_number;
             document.getElementById("tenantJoiningDate").value =data[0].joining_date;
             document.getElementById("tenantComments").value =  data[0].comments;
          
            
        
        }).catch(error => alert('Error:', error)); 
        
            
                 //  getapi(url);
                }
         
  