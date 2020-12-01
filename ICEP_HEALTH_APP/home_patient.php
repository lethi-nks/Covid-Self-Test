<!DOCTYPE html>
<html>
  <head>
      <title>Home</title>
      <link rel="stylesheet" href="style.css">
      <style>
    
    .flip{
        width:390px;
        height:350px;
        margin: 10px;
        float:left;
    }
    
    .flip > .front{
        position: absolute;
        -webkit-transform: perspective(600px)rotateY(0deg);
        transform: perspective(600px)rotateY(0deg);
        background:#fc0 ;
        width:390px;
        height:350px;
        border-radius: 7px;
        backface-visibility: hidden;
        transition:-webkit- transform .7s linear 0s;
        transition: transform .7s linear 0s;
        
    }
    
    .flip > .back{
        position: absolute;
         -webkit-transform: perspective(600px)rotateY(180deg);
        transform: perspective(600px)rotateY(180deg);
        background:#80bfff ;
        width:390px;
        height:350px;
        border-radius: 7px;
        backface-visibility: hidden;
        transition: -webkit-transform .7s linear 0s;
        transition: transform .7s linear 0s;
        
    }
    
    .flip:hover >.front
    {
        -webkit-transform: perspective(600px) rotateY(-180deg);
       transform: perspective(600px) rotateY(-180deg);
    }
    
     .flip:hover >.back
    {
       -webkit-transform: perspective(600px) rotateY(0deg);
        transform: perspective(600px) rotateY(0deg);
    }
</style>
  </head>
  <body>
      
      <div class="area">
          <h1>HEALTH CARE SERVICE CENTER</h1>
          <div class="flip">
    <div class="back"><h3 style="text-align: center">DON’T PANIC</h3>
        <p style="text-align: center">There is no need to panic – 82% of COVID-19<br> cases are mild: patients only experience<br> a slight fever,
            fatigue and a cough. Only about 6% of patients need intensive care. <br>
            The vast majority of people can stay at home <br>and get better without hospital treatment.</p></div>
    
<div class="front"><h3 style="text-align: center">DON’T PANIC</h3></div>

</div>
      <div class="flip">
    <div class="back" style="text-align: center"><h4 style="text-align: center">The most common symptoms are:</h4>
        <ul style="list-style-type:none">

          <li>Cough</li>
          <li>Fever</li>
          <li>Sore throat</li>
          <li>Shortness of breath</li>
        </ul>
    </div>
          <div class="front"><h2 style="text-align: center">SYMPTOMS</h2></div>

    </div>
      
 <div class="flip">
    <div class="back" ><h4 style="text-align: center">PREVENTATIVE TIPS</h4>
        <ul style="list-style-type:disc">
            <li> Wash your hands regularly with soap or an alcohol-based hand sanitizer.</li><br>

            <li> Avoid touching your eyes, nose, and mouth with unwashed hands.</li><br>

            <li> Avoid close contact with people who are sick.</li><br>

            <li> Cover your cough or sneeze with a flexed elbow or a tissue, then throw the tissue in the bin.</li><br>

            <li> Clean and disinfect frequently touched objects and surfaces.</li><br>
         </ul>
   </div>
    <div class="front"><h2 style="text-align: center">PREVENTATIVE TIPS</h2></div>

</div>
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