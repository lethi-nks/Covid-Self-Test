<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this templ  ate file, choose Tools | Templates
and open the template in the editor.
-->
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

$query = "SELECT * FROM `tbl_admin` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1)
{

                    //echo "Login Credentials verified";
                    $_SESSION['username'] = $username;
                    $msg = "Login Credentials verified";
                    
                     header("Location:home.php");

}
else
{
$msg = "Invalid Login Credentials";
//echo "Invalid Login Credentials";
}
}
}

include 'patient_login.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="edit.css" rel="stylesheet">
    </head>
    <body>
        
        
        <?php
        if(isset($_POST["signup"]))
        {
            header("Location:signup.php");
        }
        
        ?>
     
    </body>
</html>
