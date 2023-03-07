<?php

?>

<!DOCTYPE html>
<html lang="en" class="h-90">
<head>

  <title>Admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Bed form</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">


        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
       <!-- <script type="text/javascript" src="./assets/js/searchTenant.js"></script> -->




</head>
<style>
 .btn {
  background-color: dark;
  border: none;
  color: black;
  padding: 10px 25px;
  padding:0rem 1rem 1rem 1rem;
  cursor: pointer;
  font-size: 20px;
} 

</style>
		
    <body class="smokewhite_bg_color">
      
    <?php
            include "./adminHeader.php";
            include "./sidebar.php";
            include "./commonlinks.php";
           
            include_once "./config/dbconnect.php";
        ?>

    <div class="container h-80 ">
        <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                <a href="complaints_table.php"  > <div style="margin-left:250px">
<button style="font-size:24px"><i class="fa fa-close"></i></button></div></a>
                </div>  
                </div>
                </div>
 
    	<div class="container h-80 ">
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
					<!-- Form -->
                    <?php if(!empty($msg)){echo $msg; }?></p>
                    
                    <form id="complaint" class="form-example" action="" method="post" >
					<h1><center><div class="p-3 mb-2 bg- text-black" ><p class="two">complaint Form</p></div></center></h1>
                		
          <div class="form-group">
                    <label for="tenantMobileNumber">Tenant Mobile Number :</label>
                    
							<input type="text" class="form-control tags" id="tags" placeholder="" name="tags">
						</div>
                		<!-- Input fields -->
                    <div id="complaintDetails" style="display:none">

                        <div class="form-group">
							<label for="complaintTenantName">Tenant Name :</label>
							<input type="text" class="form-control complaintTenantName" id="complaintTenantName" placeholder="" name="complaintTenantName">
						</div>
                        <div class="form-group">
                			<label for="complaintFloorNumber">Floor Number :</label>
                			<input type="number" class="form-control complaintFloorNumber" id="complaintFloorNumber" placeholder="" name="complaintFloorNumber">
                		</div>

                    <div class="form-group">
                			<label for="complaintRoomNumber">Room Number :</label>
                			<input type="number" class="form-control complaintRoomNumber" id="complaintRoomNumber" placeholder="" name="complaintRoomNumber">
                		</div>

                    <div class="form-group">
                			<label for="complaintBedNumber">Bed Number :</label>
                			<input type="number" class="form-control complaintBedNumber" id="complaintBedNumber" placeholder="" name="complaintBedNumber">
                		</div>
                		<div class="form-group">
                			<label for="complaintMobileNumber">Tenant Mobile Number :</label>
                			<input type="number" class="form-control complaintMobileNumber" id="complaintMobileNumber" placeholder="" name="complaintMobileNumber">
                		</div>
                    </div>      
                	
                        <div class="form-group">
							          <label for="complaintType">Complaint Type :</label>
							          <input type="text" class="form-control complainType" id="complaintType" placeholder="" name="complainType">
                        
					          </div> 

                          <div class="form-group">
                            <label for="complaintDescription">Description</label>
                         </br>
                                 <!-- <textarea id="complaintDescription" name="complaintDescription" placeholder=""rows="3" cols="40" style="height:150px" style="width:150px"></textarea></div> -->
                                 <textarea id="complaintDescription" name="complaintDescription" placeholder="Write something.." style="height:200px"></textarea>
                                </br>

                          
						<center><button type="submit" class="btn btn-dark btn-customized">Save</button>
                             </center>
						
                	</form>
					<!-- Form end -->
                </div>
            </div>
        </div>

        <script>
 var form=document.getElementById('complaint');

form.addEventListener('submit', function(e){
 e.preventDefault()
 var complaintName = document.getElementById("complaintName").value; 
 var complaintMobileNumber = document.getElementById("complaintMobileNumber").value; 
 var complaintFloorNumber =  document.getElementById("complaintFloorNumber").value; 
 var complaintRoomNumber =  document.getElementById("complaintRoomNumber").value; 
 var complaintBedNumber =  document.getElementById("complaintBedNumber").value;
var complaintType = document.getElementById("complaintType").value; 
 var complaintDescription = document.getElementById("complaintDescription").value; 
 var building_name = document.getElementById("building").value;
 var managerEmail = document.getElementById("manager_email").value;
 var managerMobile = document.getElementById("manager_mobile").value;
    
     console.log(complaintBedNumber,complaintRoomNumber,complaintFloorNumber,complaintMobileNumber,complaintNamer,complaintType,complaintDescription);
   
 fetch('https://iqbetspro.com/pg-management/complaints-POST-API.php', {
  method: 'POST',
  body: JSON.stringify(
//     {
     
//     "tenant_mobile":"8398391209",
//     "complaint_type":complaintType,
//       "created_date":new Date().toLocaleDateString()+' '+    new Date().toLocaleTimeString(),    
//     "complaint_description":complaintDescription,
//        "resolve_date":"",
//     "comments":""
 
//  }

 {   
    "tenant_mobile":complaintMobileNumber,
    "complaint_type":complaintType,
      "created_date":"2022-11-30 10:22:00",    
    "complaint_description":complaintDescription,
       "resolve_date":"",
    "comments":"",
    "tenant_name": complaintName,
   "floor_no":complaintFloorNumber,
    "room_no":complaintRoomNumber,
    "bed_no":complaintBedNumber,
    "building_name": building_name,
      "manager_email":managerEmail,
    "manager_mobile_no":managerMobile,
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
     //alert("ok");
    if(data[0].Message.response =='error')
    {  alert("complaint Registered failed");
      window.location = "complaints.php";}
    else
   { 
    alert("complaint Registered Succesfully");
    window.location = "complaints_table.php";}

}).catch(error => console.error('Error:', error)); 
});
</script>  
<script>
      const url_get_tenant_details="https://iqbetspro.com/pg-management/all-bed-details-GET-API.php";
    async function getapi(url_get_tenant_details) 
    {
        console.log('inside function..');

            let result = await fetch(url_get_tenant_details);
        
            let response = await result.json();
            console.log('response=',response);

            var newArray=[]
            for(let i=0;i<response.length;i++)
             { 
                //console.log(response[i].tenant_name);
                newArray.push(response[i].tenant_mobile);
               }
            console.log(newArray);
            $("#tags").autocomplete({
                source: newArray,
                select: function( event, ui ) {
                  submit(ui.item.value);
                  console.log(ui.item.value);
                }
              });

              
        }
       async function submit(searchItem)
       {
                
        // let searchItem= document.getElementById("tags").value;
        let result = await fetch(url_get_tenant_details);
        
        let response = await result.json();
        
        var foundData=response.filter(obj=> obj.tenant_mobile == searchItem);
        document.getElementById("complaintDetails").style.display="block";

        //document.getElementById("tenantEmail").value=foundData[0].tenant_email;
        document.getElementById("complaintTenantName").value=foundData[0].tenant_name;
        document.getElementById("complaintMobileNumber").value=foundData[0].tenant_mobile;
        document.getElementById("complaintFloorNumber").value=foundData[0].floor_no;
        document.getElementById("complaintRoomNumber").value=foundData[0].rooom_no;
        document.getElementById("complaintBedNumber").value=foundData[0].bed_no;
          console.log('searchItem',foundData);
       }
        getapi(url_get_tenant_details);
  </script> 
  </body>
  </html>