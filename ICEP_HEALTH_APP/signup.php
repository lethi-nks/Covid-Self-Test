<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this templ  ate file, choose Tools | Templates
and open the template in the editor.
-->
<?php


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

    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link href="edit.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="box" method="POST" >
                    <h1>Sign up</h1>
                    <p class="text-muted"> Please Register!</p>
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="surname" placeholder="Surname">
                    <input type="text" name="id_num" placeholder="ID Number">
                    <input type="text" name="age" placeholder="Age">
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="phone_num" placeholder="Phone Number">
                    <input type="text" name="city" placeholder="City">
                    <input type="text" name="password" placeholder="Password">
                    <input type="text" name="password_2" placeholder="Re-type Password">
                    <input type="submit" name="register" value="Register" href="#">
                    <h4 style="color:red"><?php print $msg ?></h4>
                </form>
            </div>
        </div>
    </div>
</div>
        
   <?php     
      
   if(isset($_POST["register"]))
        {
         
    // Assigning POST values to variables.
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $id_num= $_POST['id_num'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone_num= $_POST['phone_num'];
    $city = $_POST['city'];
    $password = $_POST['password'];
    $retype_password= $_POST['password_2'];

           //check if form is empty
            
            if(empty($name)&&empty($surname) &&empty($id_num) &&empty($age) &&empty($email) &&empty($phone_num) &&empty($city) &&empty($password) )
            {
                print "Please fill up all the fields!!";

            }
            //validate an email address
              else if (!(filter_var($email, FILTER_VALIDATE_EMAIL)))
              {
                print "Please enter a valid Email!!";
              }
              //validate the fields tht take numbers
               else if(!(is_numeric($age)))
              {
                  print "Please enter a valid age!!";
                  
              }
             else if(!(is_numeric($phone_num)) || strlen($phone_num) !=10 )
              {
                  print "Please enter a valid phone number!!";
                  
              }
             else if(verify_id_num($id_num) == false)
              {
                  print "Please enter a valid id number!!";
              }
              else
                  if($password != $retype_password)
                  {
                      print "Passwords dont match!!";
                  }
          
                else 
                {
                // insert data into table
                $query = "INSERT INTO `tbl_user` (`name`, `surname`, `id_num`, `age`, `city`, `email`, `phone_num`, `password`) VALUES ('$name', '$surname', '$id_num', '$age', '$city', '$email', '$phone_num', '$password')";
                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                if ($result)
                {

                        $msg = "Registered Successfully!!";

                         header("Location:patient_login.php");

                }
                else
                {
                  print  "Couldnt Register You, Please Try again!!";

                }
         }
            
}



function verify_id_num($id_num)
{
    $validate = false;
    if(is_numeric($id_num) && strlen($id_num) == 13)
    {
        $errors= false;
        $num_array = str_split($id_num);
        $id_month = $num_array[2].$num_array[3];
        $id_day = $num_array[4].$num_array[5];
        if($id_month<1 || $id_month>12)
        {
            $errors=true;
        }
        
        if($id_day <1 || $id_day>31)
        {
            $errors = true;
        }
        
        if(!$errors)
        {
            $validate = true;
        }
        
        return $validate;
                
    }
}

?>
    </body>
</html>
