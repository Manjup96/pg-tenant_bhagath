<?php

?>

<!DOCTYPE html>
<html lang="en" class="h-90">
<head>
<!-- <body style="background-color:#D6DBDF;"> -->
  <title>Admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Bed form</title>

        <!-- disable previous dates in Input date type -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


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
       <link rel="stylesheet" href="./assets/css/respo.css"></link>




</head>

<body class="smokewhite_bg_color">
   
   <?php
           include "./adminHeader.php";
           include "./sidebar.php";
           include "./commonlinks.php";
         
       ?>
  
    	<div class="container h-80 ">
      <div class="row h-90 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6" style="border-style: solid; background-color: white;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px grey;">

                 
<div id="close_icon_desktop_view" >
          <a href="meals_table.php"> <div style="padding-left:500px">
        <button style="font-size:24px"><i class="fa fa-close"></i></button></div></a>
          </div>
          <div class="close_icon_mobile_view">
          <a href="meals_table.php"> <div style="padding-left:200px">
        <button style="font-size:24px"><i class="fa fa-close"></i></button></div></a>
          </div>
					<!-- Form -->
                    <?php if(!empty($msg)){echo $msg; }?></p>
                    
                    <form id="meals" class="form-example" action="" method="post" >
					<h1><center><div class="p-3 m-2  bg- text-black" ><p class="two smokewhite_bg_color">Meals Form</p></div></center></h1>
                		
                
                              
                                                       <div>
                                                    <input type="checkbox" id="breakfast" name="breakfast" onclick="breakfast_meals()">
                                                            
                                                    <label for="mealsBreakfast">Breakfast</label>
                                                     </div>
                                                     <div>
                                                    <input type="checkbox" id="lunch" name="lunch" onclick="breakfast_lunch()">
                                                    <label for="mealsLunch">Lunch</label>
                                                     </div>
                                                     <div>
                                                     <input type="checkbox" id="dinner" name="dinner" onclick="breakfast_dinner()">
                                                    <label for="mealsDinner">Dinner</label>
                                                     </div>
</br>
                               <div class="form-group">
							          <label for="mealsDate">Date:</label>
							          <input type="date" class="form-control mealsDate" id="mealsDate" placeholder="" name="mealsDate">
                        
					            </div> 
                              <div class="form-group ">
                            <label for="mealsComments">comments</label>
                            </br>
                                <!--  <textarea id="mealsComments" name="mealsComments" placeholder=""rows="1" cols="23" style="height:150px" ></textarea></div> --> 
                                  <textarea id="mealsComments" name="mealsComments" placeholder="Write something.." style="height:200px"></textarea>                              
                                </br>
                     
                         
                          
						<center><button type="submit" class="btn btn-dark btn-customized">submit</button>
                             </center>
						
                	</form>
					<!-- Form end -->
                </div>
            </div>
        </div>

<script>
document.getElementById("mealsDate").valueAsDate = new Date();
function breakfast_meals() {
  if ( document.getElementById("breakfast").checked == true){
   document.getElementById("breakfast").value="yes";
   
  console.log("breakfast=",document.getElementById("breakfast").value);
  } else {
    document.getElementById("breakfast").value="no";
  }
}

function breakfast_lunch() {
  if ( document.getElementById("lunch").checked == true){
   document.getElementById("lunch").value="yes";
   
  console.log("lunch=",document.getElementById("lunch").value);
  } else {
    document.getElementById("lunch").value="no";
  }
}

function breakfast_dinner() {
  if ( document.getElementById("dinner").checked == true){
   document.getElementById("dinner").value="yes";
   
  console.log("dinner=",document.getElementById("dinner").value);
  } else {
    document.getElementById("dinner").value="no";
  }
}


        $(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#mealsDate').attr('min', maxDate);
});
</script>

        <script>
 var form=document.getElementById('meals');

form.addEventListener('submit', function(e){
 e.preventDefault()

 var mealsDate = document.getElementById("mealsDate").value; 
     var mealsComments = document.getElementById("mealsComments").value; 
     
 var tenant_name = document.getElementById("tenant_name").value;
     var tenant_mobile = document.getElementById("tenant_mobile").value; 
     var tenant_email = document.getElementById("tenant_email").value; 
    
     var floor_no =  document.getElementById("floor_no").value; 
     var room_no =  document.getElementById("room_no").value; 
     var bed_no =  document.getElementById("bed_no").value; 
    
     var building_name = document.getElementById("building_name").value;
    var managerEmail = document.getElementById("manager_email").value;
    var managerMobile = document.getElementById("manager_mobile").value; 
    
     var breakfast= document.getElementById("breakfast").value;
    var lunch= document.getElementById("lunch").value;
    var dinner= document.getElementById("dinner").value;
    
 console.log("building_name=",building_name)
    console.log("managerEmail=",managerEmail)
    console.log("managerMobile=",managerMobile)
   
     
     
    console.log("tenantUsername=",tenant_name)
    console.log("tenantMobileNumbe=",tenant_mobile)
    console.log("tenantEmail=",tenant_email)
    console.log("floor_no=",floor_no)
    console.log("bed_no=",bed_no)
    console.log("room_no=",room_no)
     console.log("breakfast=",breakfast)
    console.log("lunch=",lunch)
    console.log("dinner=",dinner)
   
     console.log(mealsDate,mealsComments);
   
     fetch('https://iqbetspro.com/pg-management/MEALS-POST-by-tenant-API.php', {
  method: 'POST',
  body: JSON.stringify(
    {
        "tenant_name":tenant_name,
    "date":mealsDate,
     "breakfast":breakfast,
      "tenant_mobile":tenant_mobile, 
      "lunch":lunch,
       "dinner":dinner,
        "comments":mealsComments,
        "building_name": building_name,
      "manager_email":managerEmail,
   
    "floor_no":floor_no,
    "room_no":room_no,
    "bed_no":bed_no,
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
    console.log(data);
    if(data[0].Message.response =='error')
    { 
        alert("Meals Registered failed");
      window.location = "meals.php";
        
    }
    else
   { 
    alert("Meals Registered Succesfully");
    window.location = "meals_table.php";
       
   }

}).catch(error => console.error('Error:', error)); 
});
  
    
</script>   
</body>
</html>