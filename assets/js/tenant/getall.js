
function start(){
    
document.getElementById("show_edit_form").style.display="none";
document.getElementById("show_table").style.display="block";
}

const url ="https://iqbetspro.com/pg-management/GET-Tenant-Details-API.php";
async function getapi(url) {
   // console.log('inside function..');

        let result = await fetch(url);
    
        let response = await result.json();
        console.log('data',response);
        show(response);
        //document.getElementById("demo").innerHTML = response;

    }
    
    getapi(url);

    function show(data) {
        let tab =
            `<tr>
            <th>Id</th>
            <th>Name</th>
            <th>Adhaar Number</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Joining Date</th>
            <th>Comments</th>
            <th>Action</th>
            </tr>`;
        let i = 1;
        
        // Loop to access all rows
        for (let r of data) {
            tab += `<tr>
        <td>${i} </td>
        <td>${r.tenant_name}</td>
        <td>${r.tenant_aadhar_number}</td>
        <td>${r.tenant_mobile}</td>
        <td>${r.tenant_email}</td>
        <td>${r.joining_date}</td>	`;
        
         // console.log(r.your_message==undefined);
        if(r.your_message==undefined)
           {
             tab+=`<td><td>
        <div style=" display: flex;justify-content: space-around;">
     
           <Button style="margin-right:10px;border-color:white" onclick="edit_row(${r.id})">
           <i class="fa fa-edit btn-outline-primary"></i></Button>
            <Button style="margin-right:10px;border-color:white" onclick="delete_row(${r.id})">
        <i class="fa fa-trash btn-outline-danger"></i></Button>
        </div>
        </td></td>`

           }

        else{
        
         tab+=`<td>${r.your_message}</td>`
             
        } 
        tab += 
        `</tr>`;
        i=i+1;
       }

      

        // Setting innerHTML as tab variable
        document.getElementById("tenants").innerHTML = tab;
        }



