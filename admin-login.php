
<?php
// include config file
include_once("./config/dbconnect.php");
session_start();

// if "login" button clicked
if(isset($_POST['login'])){
    // store email
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    // store password
    //$password = md5($_POST['password']);
    $password=$_POST['password'];
    // check email is unique or not
    $emailQuery = "SELECT * FROM `login` WHERE email = '$email'";
    $runEmailQuery = mysqli_query($conn, $emailQuery);

    if(!$runEmailQuery){
        echo "Query Failed";
    }else{
        if(mysqli_num_rows($runEmailQuery) > 0){
            $passwordQuery = "SELECT * FROM `login` WHERE email = '$email' AND password = '$password'";
            $runPasswordQuery = mysqli_query($conn, $passwordQuery);

            if(!$runPasswordQuery){
                echo "Query Failed";
            }else{
                if(mysqli_num_rows($runPasswordQuery) > 0){
                    $fetchData = mysqli_fetch_assoc($runPasswordQuery);
                    $_SESSION['id'] = $fetchData['id'];
                    $_SESSION['email']=$fetchData['email'];
                    $_SESSION['name'] = $fetchData['name'];
                    $_SESSION['LOG_IN'] ='yes';
                    ?>
                    <script>window.location.href="index.php"</script>
                    <?

                }else{
                    echo '<div class="error-handle error-1" id="mydiv" onclick="this.style.display = \'none\'">Invalid Password <span onclick="this.parentElement.style.display=\'none\'" class="topright">&times</span></div>';?>
                    <script>
                        alert("Invalid Pasword");
                        window.location.href="login.php"</script>
                <?php }
            }
        }else{
            echo "Invalid email address";
            ?>
             <script>window.location.href="login.php"</script>
             <?php
        }
    }
}
?>