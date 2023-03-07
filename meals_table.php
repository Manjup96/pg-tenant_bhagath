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

<div id="show_edit_form">
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

   <form id="meals_edit">
     <input type="hidden"  id="id_value">
  <h1><center><div class="p-3 mb-2 bg- text-black" ><p class="two smokewhite_bg_color">Meals form</p></div></center></h1>
 
                    
                        
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
							          <input type="date" class="form-control mealsDate" id="mealsDate" placeholder="" name="mealsDate"
							          readonly onclick="change_mealsDate();">
                        
					            </div> 
				
                         

                          <div class="form-group">
                            <label for="mealsComments">comments</label>
                                  </br>
                                  <textarea id="mealsComments" name="mealsComments" placeholder="Write something.." style="height:200px" ></textarea></div> 
                                 <!--<textarea id="mealsComments" name="mealsComments" placeholder="Write something.." style="height:200px"></textarea> -->  
                               </br> 

                        
                     
                     
                          
						<center><button type="submit" class="btn btn-dark btn-customized">Save</button></center>
						
              
           </form>
           </div>
          </div>
        </div>
</div>




    

         
    <script type="text/javascript" src="./assets/js/script.js"></script>
   <div class="wrapper" style="margin-right:700px" id="show_table">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 lead">
                    <div class="mt-2 mb-6 clearfix">
                    <div style="margin-left:50px;width:900px">
                    <center><div class="p-3 mb-2 mr-5 bg text-black">Meals details</div></center>
                    
                    <div class="search-container">
                     <input type="text" placeholder="Search with Name.." name="search" id="searchInput" onkeyup="searchTable()">
                     <button type="submit"><i class="fa fa-search" style="color:white"></i></button>
                        
                        <button type="submit" class="btn btn-dark " style="margin:10px"; onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button>
                        <a href="meals.php" class="btn btn-dark pull-center" style="margin:10px";><i class="fa fa-plus"></i>&nbsp;Add meals</a>

</div>
</div>
</br> 

<div style="margin-left:50px" id="show_table">
  <table id="Meals" border="1"></table>
</div>

<script >

            function change_mealsDate() {
  document.getElementById("mealsDate").readOnly = false;
}

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


                      // to show pop up 
                      document.getElementById("show_edit_form").style.display="none";
                      document.getElementById("show_table").style.display="block";
                      

const url ="https://iqbetspro.com/pg-management/GET-Meals-for-tenant-API.php";

 getapi(url);
    async function getapi(url) {
        var manager_mail = document.getElementById("manager_email").value;
   console.log("manager_mail=",manager_mail);
   var building_name = document.getElementById("building_name").value;
  var tenant_mobile=document.getElementById("tenant_mobile").value;
  //var building_name =  localStorage.getItem("selected_building1");
 
 
   console.log("building_name=",building_name);
        fetch(url, {
                  method: 'POST',
                  body: JSON.stringify({
   "manager_email":manager_mail,
   "building_name":building_name,
   "tenant_mobile":tenant_mobile
})
          })
          .then(function(response){ 
          return response.json()})
          .then(function(data)
          {
                console.log(data);
                show(data);
        })
    }
        
   
         function show(data) {
             let tab =
                 `<tr>
                 <th>id</th>
                 <th>tenant Mobile</th>
                 <th>breakfast</th>
                 <th>lunch</th>
                 <th>dinner</th>
                 <th> date</th>
                 <th>Comments</th>
                 <th>Action</th>
                 </tr>`;
             let i=1;
             // Loop to access all rows
             for (let r of data) {
                 r["date"] = r["date"].replace(/-/g,"/");
               console.log(typeof(r.Id));
                 tab += `<tr>
             <td>${i} </td>
             <td width="200%">${r.tenant_mobile}</td>
             <td>${r.breakfast}</td>
             <td>${r.lunch}</td>
             <td>${r.dinner}</td>	
             <td>${r.date}</td>
             <td>${r.comments}</td>
             <td>

            <div style=" display: flex;justify-content: space-around;">
          
              <Button style="border-color:white;margin-right:10px" id="edit_button1" onclick='edit_row(${r.id})'>
             <i class="fa fa-edit btn-outline-primary" ></i>
            
            </Button>

            <Button style="border-color:white;margin-right:10px"  id="delete_button1" onclick="delete_row(${r.id})" >
               <i class="fa fa-trash btn-outline-danger">
             </i></Button>

              
               
      
             </div>
             </td>
             </tr>`;
             i=i+1;
             }  
             // Setting innerHTML as tab variable  onclick='changeImage(\""+item.product_image2+"\");'
             document.getElementById("Meals").innerHTML = tab;
             }



              // after clicking delete button ,calling delete api 

      function delete_row(id){
        var user_answer = confirm('Entire row will be deleted , is that Ok ..?');
                 
                 if(user_answer==true)
                  {
                    fetch('https://iqbetspro.com/pg-management/delete-Meals-API.php', {
                      method: 'POST',
                      body: JSON.stringify({
                      "id":id
                  })
                  })
                  .then(function(response){ 
                  return response.json()})
                  .then(function(data)
                  {console.log((data));
                    alert("Deleted Successfully...!");
                    getapi(url);
                }).catch(error => alert('Error:', error)); 
             
                  }
               
      }



  

           
   var form=document.getElementById('meals_edit');

form.addEventListener('submit', function(e){
 e.preventDefault()

   var id=  document.getElementById("id_value").value; 
    var manager_mail = document.getElementById("manager_email").value;
   console.log("manager_mail=",manager_mail);
   var building_name = document.getElementById("building_name").value;
  var tenant_mobile=document.getElementById("tenant_mobile").value;
  //var building_name =  localStorage.getItem("selected_building1");
 
 
   console.log("building_name=",building_name);
   
    var mealsDate= document.getElementById("mealsDate").value;
    var mealsComments = document.getElementById("mealsComments").value;
    var breakfast= document.getElementById("breakfast").value;
    var lunch= document.getElementById("lunch").value;
    var dinner= document.getElementById("dinner").value;
   //  alert("Clicked on Save button...");

     fetch('https://iqbetspro.com/pg-management/update-Meals-API.php', {
  method: 'POST',
  body: JSON.stringify(
    {   
        "id":id,
    "date":mealsDate,
     "breakfast":breakfast,
      "tenant_mobile":tenant_mobile, 
      "lunch":lunch,
       "dinner":dinner,
        "comments":mealsComments
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
    console.log(data[0].Message.response);
     
    if(data[0].Message.response =='error')
    {
         alert("Meals Not Updated Successfully...");
    window.location = "meals.php";
    
    }
    else
    {
        alert("Meals Updated Successfully...");
      window.location = "meals_table.php";}

}).catch(error => alert('Error:', error)); 
});





          // clicking edit icon
          function edit_row(id){
       // alert("inside edit row "); 
                  fetch(' https://iqbetspro.com/pg-management/id-single-Meals-Details-GET.php', {
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
             //document.getElementById("tenantMobileNumber").value=data[0].tenant_mobile;
              document.getElementById("mealsDate").value = data[0].mealsDate;
             document.getElementById("mealsComments").value =  data[0].comments;
             //document.getElementById("createdDate").value =  data[0].created_date;
             //document.getElementById("resolveDate").value =data[0].resolve_date;
             //document.getElementById("comments").value =  data[0].comments;
          
            
        
        }).catch(error => alert('Error:', error)); 
        
            
                 //  getapi(url);
                }
         
   
             </script>
             
<!-- download pdf -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('Meals'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Meals_details.pdf");
                }
            });
        }
</script>
</script>
    </body>
    </html>

    
