
<?php

include_once 'Header.php';

?>

<!DOCTYPE html>
<html>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="SignIn.css" type="text/css" rel="stylesheet" />
<head>
	<title>SignIn</title>
</head>



<body>
  
  <div class="inner-container">
   
    <div class="box">
      <h1>Sign In</h1>
       <form action="includes/SignIn.inc.php" method="post">

          <input type="text" name = "semail" placeholder="Email"/>
          <input type="password" name = "spassword" placeholder="Password"/>        
          <button name ="submit">Sign In</button>

        </form>
        <?php 

        if (isset($_GET["newpwd"])) {
           if ($_GET["newpwd" == "passwordupdated"]) {
             echo '<p class="signupsuccess">Your password has been reset!</p>';
           }
         } 

         ?>

        <p><a href="ResetPassword.php">Forgot Password?</a></p>
        <p>Not a member? <span><a href="SignUp.php">Sign Up</a></span></p>   
          
    </div>
    <?php 
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields</p>";
          }
          else if ($_GET["error"] == "Wronglogin") {
            echo "<p>Make Sure your Email is correct</p>";
          }           
        }
     ?>
  </div>

</body>
</html>
