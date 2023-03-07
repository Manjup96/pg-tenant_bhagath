<div class="sidebar">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <!-- <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3> -->
            <img src="img/logo.png" style="width:100%;" />
        </a>
      
        <div class="navbar-nav w-100">
            <a href="dashboard.php" class="nav-item nav-link  <?php if($url === "dashboard.php") echo 'active'  ?>"><i class="number_style me-2">1</i>Dashboard</a>
          
        <a href="add-level-one-data-single.php" class="nav-item nav-link  <?php if($url === "add-level-one-data-single.php") echo 'active'  ?>"><i class="number_style me-2">2</i>Add New Data</a>
        <!-- <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a> -->
        <a href="balance-sheet.php" class="nav-item nav-link <?php if($url === "balance-sheet.php") echo 'active'  ?>"><i class="number_style me-2">3</i>Balance Sheet</a>
        <a href="profit-loss-stmt.php" class="nav-item nav-link <?php if($url === "profit-loss-stmt.php") echo 'active'  ?>"><i class="number_style me-2">4</i>P&L Statement</a>
        <a href="cash-flow-stamt.php" class="nav-item nav-link <?php if($url === "cash-flow-stamt.php") echo 'active'  ?>"><i class="number_style me-2">5</i>Cash Flow Stmt</a>
        <a href="bal-sheet-comp.php" class="nav-item nav-link <?php if($url === "bal-sheet-comp.php") echo 'active'  ?>"><i class="number_style me-2">6</i>BS Comparison</a>
        <a href="profit-loss-comp.php" class="nav-item nav-link <?php if($url === "profit-loss-comp.php") echo 'active'  ?>"><i class="number_style me-2">7</i>P&L Comp</a> 
         <a href="cash-flow-stamt-comp.php" class="nav-item nav-link <?php if($url === "cash-flow-stamt-comp.php") echo 'active'  ?>"><i class="number_style me-2">8</i>CFS Comp</a>
        <a href="ratios.php" class="nav-item nav-link <?php if($url === "ratios.php") echo 'active'  ?>"><i class="number_style me-2">9</i>Ratio Analysis</a>
        <a href="view-level-one-data.php" class="nav-item nav-link <?php if($url === "view-level-one-data.php") echo 'active'  ?>"><i class="number_style me-2">10</i>View Data</a> 
        

       
     
        </div>
    </nav>
</div>






<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px;">Hi  </h5>
</div>

<hr style="border:1px solid; background-color:#FADBD8; border-color:#FADBD8;">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="dashboard.php" ><i class="fa fa-dashboard"></i> Dashboard</a>
    <a href="room_table.php"  onclick="" ><i class="fa fa-th-large"></i> my profile</a>
    <a href="room_table.php"  onclick="" ><i class="fa fa-th-large"></i> Payments</a>
    <a href="meals_table.php"   onclick="" ><i class="fa fa-user"></i> Meals</a>
    <a href="news_table.php"   onclick="" ><i class="fa fa-user"></i> News</a>
    <a href="complaints_table.php"   onclick="" ><i class="fa fa-user"></i> Complaints</a>
    <a href="logout.php"  onclick="" ><i class=" fa fa-thin fa-power-off"></i>Logout</a>

</div>
</div>
  
</div>
 
 
<div id="main">
<div class="w3-teal">
    <button class="openbtn" style="background-color:#363636" onclick="openNav()"><i class="fa fa-home"></i></button>
    <div class="w3-container">
   
      </div>




</div>



<?php
// Start the session
//  session_start();


if(isset($_GET['name']))
{
 $n = $_GET['name'];
}
else
{
    $n = $_SESSION['username'];
}

if(isset($_GET['email']))
{
 $e = $_GET['email'];
}
else
{
    $e = $_SESSION['email'];
}

if(isset($_GET['mobile']))
{
 $m = $_GET['mobile'];
}
else
{
    $m = $_SESSION['mobile'];
}


echo "<h5 style='color:black; margin-left:30vw'>"."Hello " . $n . ".<h5><br>";

// echo "<h5 style='color:black; margin-left:30vw'>"."mail " . $e . ".<h5><br>";
// echo "<h5 style='color:black; margin-left:30vw'>"."mail " . $m . ".<h5><br>";

echo '<input type="hidden" name="mgr_email" value="'.$m.'">';
echo '<input type="hidden" name="mgr_mobile" value="'.$e.'">';
?>
