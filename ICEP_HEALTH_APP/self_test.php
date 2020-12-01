<?php

$has_covid = false;


    if(isset($_POST["opt1"]) == $_POST["yes"])
    {
       $has_covid = true;
    }
    else 
        if(isset($_POST["opt1"]) == $_POST["no"])
    {
        $has_covid = false;
    }

    if(isset($_POST["submit"]))
    {
        if($has_covid == true)
        {
            header("Location:set_appointment.php");
        }
    }

/**if(isset($_POST["submit"]))
{
    for($i=1;$i<=10;$i++)
{
     if(!isset($_POST["r"][$i]))
     echo "Please answer all questions";
}
    
}**/
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





