      // after clicking delete button ,calling delete api 

      function delete_row(Id){
        var user_answer = confirm('Entire row will be deleted , is that Ok ..?');
                 
                 if(user_answer==true)
                  {
                    fetch('https://iqbetspro.com/pg-management/delete-Tenant-Enquiry-API.php', {
                      method: 'POST',
                      body: JSON.stringify({
                      "Id":Id
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
          