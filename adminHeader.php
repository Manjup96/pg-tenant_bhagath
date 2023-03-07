<?php
   session_start();
   include_once "./config/dbconnect.php";

?>
<head>
<style>
h2 {text-align: center;}
</style>     
</head>
 <!-- nav -->
 
<nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color:white;">
<div style="margin-left:150px">
    <a class="navbar-brand ml-5 " href="./index.php" >
       <img src="./assets/images/logo.png" width="80" height="80" alt="Swiss Collection">
    </a>
</div>
     <h2> PG Tenant</h2>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    <div class="topbar-divider d-none d-sm-block"></div>

    
    <div class="user-cart">  
        <?php           
        if(isset($_SESSION['user_id'])){
          ?>
        
          <a href="" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
         </a>
         
          <?php
        } else {
            ?>
            <!-- <a href="" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5 " style="font-size:30px; color:#fff;" aria-hidden="true"></i>
            </a> -->

            <?php
        } ?>

</div>  
    

</nav>
  