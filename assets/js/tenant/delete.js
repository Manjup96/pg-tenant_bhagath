

// Delete function

function delete_row(id){
    //console.log(id);
  //alert(id);
var user_answer = confirm('Entire row will be deleted,is that OK..?');
     
if(user_answer==true)
{
  
              fetch('https://iqbetspro.com/pg-management/delete-Tenant-Registration-APi.php', {
                  method: 'POST',
                  body: JSON.stringify({
            "id":id
          })
          })
          .then(function(response){ 
          return response.json()})
          .then(function(data)
          {console.log(typeof(data[0].Message));
            // alert(data[0].Message.response)
          

            getapi(url);
        }).catch(error => alert('Error:', error)); 

}
}
