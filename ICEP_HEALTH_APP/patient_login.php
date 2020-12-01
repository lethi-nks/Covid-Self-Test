<?php
session_start();

$host ="localhost";
$username="root";
$password="";
$database="health_care_db";
$msg =" ";
//create connection
$conn = mysqli_connect($host, $username,$password, $database);
//check if connection
if($conn ->connect_error)
{
    die("error trying to connect");
}
else
{
   $msg= "connected successfully";
}

if (isset($_POST['login']))
{
	 
// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

                if(empty($username) || empty($password))
                {
                    $msg = "All fields are to be filled";
                }
   else
       {
        // CHECK FOR THE RECORD FROM TABLE
        $query = "SELECT * FROM `tbl_user` WHERE email='$username' and password='$password' ";

        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);

            if ($count == 1)
            {

                                //echo "Login Credentials verified";
               $_SESSION['email'] = $username;
               $msg = "Login Credentials verified";
               header("Location:home_patient.php");

            }
        else
        {
        $msg = "Invalid Login Credentials";
        //echo "Invalid Login Credentials";
        }
      }
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="edit.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="box" method="POST" >
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p>
                    <input type="text" name="username" placeholder="Email as Username">
                    <input type="password" name="password" placeholder="Password">
                   <!--<a class="forgot text-muted" href="#">Forgot password?</a> -->
                    <input type="submit" name="login" value="Login" href="#"><input type="submit" name="signup" value="Sign-up" href="#">
                    <h4 style="color:red"><?php print $msg ?></h4>
                </form>
            </div>
        </div>
    </div>
</div>
        <?php
        if(isset($_POST["signup"]))
        {
            header("Location:signup.php");
        }
        
        ?>
     
    </body>
</html>

