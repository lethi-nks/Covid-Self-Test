<?php


$host ="localhost";
$username="root";
$password="";
$database="health_care_db";
$msg =" ";
$message = "";
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

<?php     
      
   if(isset($_POST["submit"]))
        {
         
    // Assigning POST values to variables.
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $id_num= $_POST['id_num'];
    $email = $_POST['email'];
    $phone_num= $_POST['phone_num'];
    $city = $_POST['city'];
    $date = $_POST['date'];
    

           //check if form is empty
            
            if(empty($name)&&empty($surname) &&empty($id_num) &&empty($email) &&empty($phone_num) &&empty($city) &&empty($date) )
            {
              $message = "Please fill up all the fields!!";

            }
            //validate an email address
              else if (!(filter_var($email, FILTER_VALIDATE_EMAIL)))
              {
              $message= "Please enter a valid Email!!";
              }
              //validate the fields tht take numbers
         
             else if(!(is_numeric($phone_num)) || strlen($phone_num) !=10 )
              {
                  $message = "Please enter a valid phone number!!";
                  
              }
             else if(verify_id_num($id_num) == false)
              {
                   $message = "Please enter a valid id number!!";
              }
                else 
                {
                // insert data into table
                $query = "INSERT INTO `tbl_appointment` (`name`, `surname`, `id_um`, `city`, `email`, `phone_num`, `date`) VALUES ('$name', '$surname', '$id_num', '$city', '$email', '$phone_num', '$date')";
                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                if ($result)
                {

                         $message = "Appointment Set Successfully!!";

                         header("Location:thank_you.php");

                }
                else
                {
                  print  "Couldnt Set Appointment for you, Please Try again!!";

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

<!DOCTYPE html>
<html>
  <head>
      <title>Set Appointment</title>
      <link rel="stylesheet" href="style.css">
      
<style>
.box {
    width:600px;
    padding: 40px;
    position: relative;
    top: 50%;
    text-align: center;
    transition: 0.25s;
    margin-top: 100px
}

.box input[type="text"],
.box input[type="password"], .box input[type="date"]:focus
 {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 10px 10px;
    width: 250px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    
}
.box input[type="number"],
.box input[type="email"]
 {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 10px 10px;
    width: 250px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500
}

.box input[type="text"]:focus,.box input[type="date"]:focus,
.box input[type="password"]:focus {
    width: 300px;
    border-color: #2ecc71
}

.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}

.box input[type="submit"]:hover {
    background: #2ecc71
}
.text-muted{
    color:#2ecc71;
    text-align: center;
    
    
}
p{
    text-align: center;
    color:Red;

}

</style>
  </head>
  <body>
      
      <div class="area">
          <h1>HEALTH CARE SERVICE CENTER</h1>
          
              <p>You might have a covid 19 case, Please Don't panic. <br>Set an Appoinment with Our health care workers</p>
              <form class="box" method="POST" >
                    <h4 style="color:red"><?php print $message ?></h4>
                    <p class="text-muted">Set Appointment To Be Tested</p>
                    <input type="text" name="name" placeholder="Name"><br>
                    <input type="text" name="surname" placeholder="Surname"><br>
                    <input type="text" name="id_num" placeholder="ID Number"><br>
                    <input type="text" name="email" placeholder="Email"><br>
                    <input type="text" name="phone_num" placeholder="Phone Number"><br>
                    <input type="text" name="city" placeholder="City"><br>
                    <input type="date" id="start" name="date"
                     value="2020-12-02"
                      min="2020-12-01" max="2021-01-31">
                    <input type="submit" name="submit" value="Set Appointment" href="#"><br>
                    
              
              
          </form>
      </div>
      </div>
      <nav class="main-menu">
          <h3>MENU</h3>
            <ul>
                
                <li>
                    <a href="home_patient.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Home
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="test.php">
                        <i class="fa fa-stethoscope"></i>
                        <span class="nav-text">
                            Test
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="display.php">
                       <i class="fa fa-fw fa-user"></i>
                        <span class="nav-text">
                            View Profile
                           
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="set_appointment.php">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                             Set Appointment
                        </span>
                    </a>   
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="logout.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
     
      <footer></footer>
 
      
  </body>
    </html>

