       // clicking edit icon
       function edit_row(Id){
        //alert(Id)
       
     fetch('https://iqbetspro.com/pg-management/id-single-Tenant-Enquiry-Details-GET.php', {
     method: 'POST',
     body: JSON.stringify({
"Id":Id
})
})
.then(function(response){ 
return response.json()})
.then(function(data)
{console.log(data);
//alert(data[0].Message.response)


     document.getElementById("show_edit_form").style.display="block";
      document.getElementById("show_table").style.display="none";
document.getElementById("id_value").value=data[0].Id;
document.getElementById("enquiryMobileNumber").value=data[0].Mobile_Number;
 document.getElementById("enquiryUsername").value = data[0].Name;
document.getElementById("enquiryEmail").value =  data[0].Email;
document.getElementById("enquiryRemarks").value =  data[0].Remarks;
document.getElementById("enquiryReference").value =  data[0].Reference;

alert("Enquiry Details Updated")
}).catch(error => alert('Error:', error)); 



    //  getapi(url);
   }