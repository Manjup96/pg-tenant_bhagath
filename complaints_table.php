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
          <a href="complaints_table.php"> <div style="padding-left:500px">
        <button style="font-size:24px"><i class="fa fa-close"></i></button></div></a>
          </div>
          <div class="close_icon_mobile_view">
          <a href="complaints_table.php"> <div style="padding-left:200px">
        <button style="font-size:24px"><i class="fa fa-close"></i></button></div></a>
          </div>
   <form id="complaint_edit">
     <input type="hidden"  id="id_value">
  <center><div class="p-3 mb-2  mr-5 bg- text-black" ><p class="two smokewhite_bg_color">complaint details</p></div></center>
  
  
  
                                  
                          <div><label for="complaintType">Complaint Type</label>
                                  <input type="text" id="complaintType" name="complaintType" placeholder=" " ></textarea></div>
                               </br>

                          <div><label for="complaintDescription">Description</label>
                            </br>
                                  <textarea id="complaintDescription" name="complaintDescription" placeholder="Write something.." style="height:200px" ></textarea></div>
                                 
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
                    <div style="margin-left:50px;width:1120px">
                    <center><div class="p-3 mb-2  mr-5 bg text-black">complaints details</div></center>
                  
                    <div class="search-container">
                     <input type="text" placeholder="Search with Name.." name="search" id="searchInput" onkeyup="searchTable()">
                     <button type="submit"><i class="fa fa-search"  style="color:white"></i></button>
                        
                        <button type="submit" class="btn btn-dark " style="margin:10px"; onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button>
                        <a href="complaints.php" class="btn btn-dark pull-center" style="margin:10px";><i class="fa fa-plus"></i>&nbsp;Add complaints</a>
                       
</div>
</div>
</br> 

<div style="margin-left:50px" id="show_table">
  <table id="complaint" border="1"></table>
</div>

<script>


                      // to show pop up 
                      document.getElementById("show_edit_form").style.display="none";
                      document.getElementById("show_table").style.display="block";
                      

  
    const url ="https://iqbetspro.com/pg-management/Complaints-GET-API-managers-buildings.php";
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
}
           )
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
                 <th>Id</th>
                 
                 <th>Tenant Number</th>
                 <th>Complaint Type</th>
                 <th>Complaint Description</th>
                 <th>Created Date</th>
                 <th>Response</th>
                 <th>Resolve Date</th>
                 <th>Comments</th>
                 <th>Action</th> 
                 </tr>`;
             let i=1;
             // Loop to access all rows
             for (let r of data) {
                 r["resolve_date"] = r["resolve_date"].replace(/-/g,"/");
                 r["created_date"] = r["created_date"].replace(/-/g,"/");
               console.log(typeof(r.Id));
                 tab += `<tr>
             <td>${i} </td>
             <td width="200%">${r.tenant_mobile}</td>
             <td>${r.complaint_type}</td>
             <td>${r.complaint_description}</td>
             <td>${r.created_date}</td>	
             <td>${r.response}</td>	
             <td>${r.resolve_date}</td>
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
             document.getElementById("complaint").innerHTML = tab;
             }



              // after clicking delete button ,calling delete api 

      function delete_row(id){
        var user_answer = confirm('Entire row will be deleted , is that Ok ..?');
                 
                 if(user_answer==true)
                  {
                    fetch('https://iqbetspro.com/pg-management/delete-Complaints-API.php', {
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



  

           
   var form=document.getElementById('complaint_edit');

form.addEventListener('submit', function(e){
 e.preventDefault()

   var id=  document.getElementById("id_value").value; 
    //var mobile= document.getElementById("tenantMobileNumber").value;
    // var name= document.getElementById("tenantName").value;
    var complaintType= document.getElementById("complaintType").value;
    var complaintDescription= document.getElementById("complaintDescription").value;
    //var comments =  document.getElementById("tenantComments").value;
    //var joining_date =  document.getElementById("tenantJoiningDate").value;
     //alert("Clicked on Save button...");

     fetch('https://iqbetspro.com/pg-management/update-Complaints-API.php', {
  method: 'POST',
  body: JSON.stringify(
    {   
    "id":id,
    
    "complaint_type":complaintType,
        
    "complaint_description":complaintDescription,
       
   
    
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
    window.location = "complaints.php";
    else
    {console.log("Updated Successfully...");
      window.location = "complaints_table.php";}

}).catch(error => alert('Error:', error)); 
});





          // clicking edit icon
          function edit_row(id){
       // alert("inside edit row "); 
                  fetch(' https://iqbetspro.com/pg-management/id-single-Complaints-API.php', {
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
              document.getElementById("complaintType").value = data[0].complaint_type;
             document.getElementById("complaintDescription").value =  data[0].complaint_description;
             //document.getElementById("createdDate").value =  data[0].created_date;
             //document.getElementById("resolveDate").value =data[0].resolve_date;
             //document.getElementById("comments").value =  data[0].comments;
          
            
        
        }).catch(error => alert('Error:', error)); 
        
            
                 // getapi(url);
                }
         
   
             </script>

<!-- download pdf -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('complaint'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("complaint_details.pdf");
                }
            });
        }
</script>
</script>
    </body>
    </html>
    