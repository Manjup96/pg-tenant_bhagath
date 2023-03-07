
  

    // const url ="https://iqbetspro.com/pg-management/All-Tenants-Details-GET-API.php";
    const url ="https://iqbetspro.com/pg-management/GET-Tenant-Details-API.php";
    async function getapi(url) {
        console.log('inside function..');

            let result = await fetch(url);
        
            let response = await result.json();
            console.log('response=',response);

            var newArray=[]
            for(let i=0;i<response.length;i++)
             { 
                //console.log(response[i].tenant_name);
                newArray.push(response[i].tenant_name);
               }
            console.log(newArray);
            $( "#tags" ).autocomplete({
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
        let result = await fetch(url);
        
        let response = await result.json();
        
        var foundData=response.filter(obj=> obj.tenant_name == searchItem);
        document.getElementById("tenantDetails").style.display="block";

        document.getElementById("tenantEmail").value=foundData[0].tenant_email;
        document.getElementById("tenantUserName").value=foundData[0].tenant_name;
        document.getElementById("tenantMobileNumber").value=foundData[0].tenant_mobile;
          console.log('searchItem',foundData);
       }
        getapi(url);
        
            
