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

$sql = "SELECT * FROM `tbl_appointment`";
$result = $conn ->query($sql);
      

?>

  <?php
      if(isset($_POST["accept"]))
      {
         print "Appointment Accepted";
          header("Location:thank_you_admin.php");
      }
     
      include 'delete.php';    
      ?>
<!DOCTYPE html>
<html>
  <head>
      <title>View Appointment</title>
      <link rel="stylesheet" href="style.css">
<style>
    

    .area{
    display: block;
    text-align: center;
}
.table
{
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
    border: 2px solid black;
}
</style>
  </head>
  <body>
      
      <div class="area">
          <h1>HEALTH CARE SERVICE CENTER</h1>
          
          
             <?php
             if($result)
{
    if($result ->num_rows >0)
    {
             ?> <table class='table'>
                 <tr>
                     <td>#</td><td>Name</td><td>Surname</td><td>ID Number</td><td>Email</td><td>Phone Number</td><td>City</td><td>Date</td><td>Action</td>
                 </tr>
                 <?php
                 while($row = $result -> fetch_assoc())
        {
                     $count =1;
                 ?>
                 <tr>
                     <td><?php print $count; ?></td>
                     <td><?php print $row["name"]; ?></td>
                     <td><?php print $row["surname"]; ?></td>
                     <td><?php print $row["id_um"]; ?></td>
                     <td><?php print $row["email"]; ?></td>
                     <td><?php print $row["phone_num"]; ?></td>
                     <td><?php print $row["city"]; ?></td>
                     <td><?php print $row["date"]; ?></td><form method="post">
                     <td><input type="submit" name="accept" value ="Accept"> </td>
                     <td><input type="submit" name="decline" value ="Decline ">  </a></td></form>
                 </tr>
                 <tr>
                     <td><?php print $count; ?></td>
                     <td><?php print $row["name"]; ?></td>
                     <td><?php print $row["surname"]; ?></td>
                     <td><?php print $row["id_um"]; ?></td>
                     <td><?php print $row["email"]; ?></td>
                     <td><?php print $row["phone_num"]; ?></td>
                     <td><?php print $row["city"]; ?></td>
                     <td><?php print $row["date"]; ?></td><form method="post">
                     <td><input type="submit" name="accept" value ="Accept"> </td>
                     <td><input type="submit" name="decline" value ="Decline ">  </a></td></form>
                 </tr> <tr>
                     <td><?php print $count; ?></td>
                     <td><?php print $row["name"]; ?></td>
                     <td><?php print $row["surname"]; ?></td>
                     <td><?php print $row["id_um"]; ?></td>
                     <td><?php print $row["email"]; ?></td>
                     <td><?php print $row["phone_num"]; ?></td>
                     <td><?php print $row["city"]; ?></td>
                     <td><?php print $row["date"]; ?></td><form method="post">
                     <td><input type="submit" name="accept" value ="Accept"> </td>
                     <td><input type="submit" name="decline" value ="Decline ">  </a></td></form>
                 </tr>
          </table>
          <?php
          $count++;
          }
    }
}
          ?>
          <p><?php print $msg; ?></p>
      </div>
      <nav class="main-menu">
          <h3>MENU</h3>
            <ul>
                
                <li>
                    <a href="home.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Home
                        </span>
                    </a>
                  
                </li>
                
               
                <li class="has-subnav">
                    <a href="view_appointment.php">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                             View Appointment
                        </span>
                    </a>   
                </li>
            </ul>

            <ul class="logout">
                <li>
                    <a href="logout_admin.php">
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
