<?php
      
     $answer = isset($_POST["opt1"]);
   if(isset($_POST["submit"]))
    {
         
    if($answer == "yes")
    {
       
        header("Location:set_appointment.php");
    }
    
   else if($answer == "no")
    {
      header("Location:test_reslut.php");
       
    }
    }
?>


<!DOCTYPE html>
<html>
  <head>
      <title>Home</title>
      <link rel="stylesheet" href="style.css">
<style>
    .form{
        text-align: center;
        border: 2px solid black;
    }
    .button {
  background: #76B3FA;
  border-radius: 5px;
  padding: 20px 60px;
  color: #fff;
  text-decoration: none;
  font-size: 0.1;
  margin: 0 15px;
}

/* Hover state animation applied here */
.button:hover { 
  -webkit-animation: hover 1200ms linear 2 alternate;
  animation: hover 1200ms linear 2 alternate;
}

/* Active state animation applied here */
.button:active {
  -webkit-animation: active 1200ms ease 1 alternate;
  animation: active 1200ms ease 1 alternate; 
  background: #5F9BE0;
}
</style>
  </head>
  <body>
      
      <div class="area">
          <h1>HEALTH CARE SERVICE CENTER</h1>
          <form method="POST" class="form">
              <h3>COVID-19 Self Assessment</h3>
              <p>1. Do you or the patient have a cough?</p>
                <label class="radio-inline"><input type="radio" name="opt1" value="yes" >Yes</label>
                <label class="radio-inline"><input type="radio" name="opt1" value ="no">No</label>
                <br>
                <p>2. Do you have shortness of breath? </p>
                <label class="radio-inline"><input type="radio" name ="opt2" value="yes">Yes</label>
                <label class="radio-inline"><input type="radio" name="opt2" value="no">No</label>
                <br>
                <p>3. Do you have a sore throat? </p>
                <label class="radio-inline"><input type="radio" name="opt3" value="yes">Yes</label>
                <label class="radio-inline"><input type="radio" name="opt3"value="no">No</label>
                <br>
                <p>4. Do you have loss of sense of smell? </p>
                <label class="radio-inline"><input type="radio" name="opt4" value="yes">Yes</label>
                <label class="radio-inline"><input type="radio" name="opt4" value="no">No</label>
                <br>
                <p>5. Do you have alteration of the sense of taste? </p>
                <label class="radio-inline"><input type="radio" name="opt5" value="yes" >Yes</label>
                <label class="radio-inline"><input type="radio" name="opt5" value="no">No</label>
                <br>
                <p>6. Do you have a high fever?  </p>
                <label class="radio-inline"><input type="radio" name="opt6" value="yes">Yes</label>
                <label class="radio-inline"><input type="radio" name="opt6" value="no">No</label>
                <br>
                <p>7. Do you experience weakness? </p>
                <label class="radio-inline"><input type="radio" name="opt7" value="yes">Yes</label>
                <label class="radio-inline"><input type="radio" name="opt7" value="no">No</label>
                <br>
                <p>8. Do you have muscle pain? </p>
                <label class="radio-inline"><input type="radio" name="opt8" value="yes" >Yes</label>
                <label class="radio-inline"><input type="radio" name="opt8" value="no">No</label>
                <br>
                <p>9. Do you have diarrhoea? </p>
                <label class="radio-inline"><input type="radio" name="opt9" value="yes">Yes</label>
                <label class="radio-inline"><input type="radio" name="opt9" value="no">No</label>
                <br>
                <p>10. Did you have close contact with a confirmed COVID-19 case in the past 10 days?  </p>
                <label class="radio-inline"><input type="radio" name="opt10" value="yes">Yes</label>
                <label class="radio-inline"><input type="radio" name="opt10" value="no">No</label>
                <br><br>
                <input class="button" type="submit" name="submit" value ="Submit Assessment">
                
                
    
                
                            
              
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
                    <a href="set_appointment">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                             Set Appointment
                        </span>
                    </a>   
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="logout">
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

 
      

