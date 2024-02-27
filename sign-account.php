<!--===========================================
                    AUTHOR
    --------------------------------------
    RAFZAN B ROSHAM (FRONT-END ASSESSMENT)
============================================-->


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Ensure the the page displays correctly across the browsers -->
    <meta charset="UTF-8">
    <meta name="description" content="Register | GNS">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="#000fff">

    <!-- page title and icon -->
    <title>Register | GNS</title>
    <link rel="icon" href="http://localhost/Technical_Assessment/md/icon.png">

    <!-- linking CSS for styling page -->
    <link rel="stylesheet" href="themecss.css">

</head>

<body>

<?php

    require('conn-db.php');

    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) 
    {
        //removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);

        //email data
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);

        //password data
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);

        //confirm password data
        $confirm = $_POST['conPass'];

        //send value to table in database
        $query    = "INSERT into `users` (username, password, email)
                     VALUES ('$username', '$password', '$email')";
        $result   = mysqli_query($conn, $query);
        
        //continue register password is matched
        if ($result && ($confirm == $password))
        {
            echo '<script type="text/javascript"> alert("You are registered successfully.") </script>';

            echo '<script type="text/javascript"> window.location.href = "http://localhost/Technical_Assessment/home.php" </script>'; 
            
        } 

        //if password mismatched
        else if ($confirm != $password)
        {
            echo '<script type="text/javascript"> alert("Your password does not match. Please try again.") </script>'; 

            //return to register form
            echo '<script type="text/javascript"> history.go(-1) </script>'; 
        }
    }

    else 
    { ?>
        <center><div class="WizBG"></div>

        <!-- sign up form box -->
        <form class="signBox" action="" method="post">

            <!-- register form headline -->
            <h2 style="padding-top: 25px; margin-bottom: -7.5px; letter-spacing: 3px;"> REGISTER FORM </h2><p style="margin-bottom: -15px; font-size: 11px; color: #fff; opacity: 0.75">Thanks in advance for joining us!</p>

            <!-- sign up section -->
            <div class="SUp-Section" style="margin-top: 50px; margin-bottom: 30px;">
                
                <!-- username text input -->
                <img src="md/accn.png" alt="Username" title="Kindly enter your username"/><input type="text" name="username" placeholder="Username" required>

                <!-- email text input -->
                <br><img src="md/mail.webp" alt="Email" title="Enter your email here"/><input type="email" name="email" placeholder="Email Adress" required>

                <!-- password text input -->
                <br><img src="md/passw.png" alt="Password" title="Protect account with your password"/><input type="password" name="password" placeholder="Password" required>

                <!-- confirm password text input -->
                <br><img src="md/passwY.png" alt="GRA Wiz" title="Confirm the password"/><input type="password" name="conPass" placeholder="Confirm Password" required>
            </div>

            <div style="padding: 25px;">
                <!-- cancel button -->
                <button type="button" class="CancelPage" onclick="window.location.href='http://localhost/Technical_Assessment/home.php'"> Cancel </button>

                <!-- register submit button -->
                <button type="submit" name="createAcc" class="signUp">Create Account</button>
            </div>
            
            <span class="logOpt" style="color: rgba(255, 255, 255, 0.75);"> Have account? <input type="button" onclick="getElementById('LB.js').style.display='block'" value="Login" style="color: #5171ff; font-size: 16px;"> instead.</span>
        </form> </center>

<?php
    } ?>


<?php
    require('conn-db.php');
    session_start();

    // If form submitted, insert values into the database.
    if (isset($_POST['logName']))
    {
        // removes backslashes
        $username = stripslashes($_REQUEST['logName']);

        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);

        $password = stripslashes($_REQUEST['logPass']);
        $password = mysqli_real_escape_string($conn, $password);

        //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE Username = '$username' AND Password = '$password'";
        
        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($result);
        
        if($rows==1)
        {
            $_SESSION['Username'] = $username;

            // Redirect to user dashboard page
            header("Location: Drivers.php");
        }

        else
        {
            echo '<script type="text/javascript"> alert("The username or password is incorrect. Please try again.") </script>'; 
            header("Refresh: 0");
	    }
    }
    
    else
    { ?>
        <!-- Lightbox -->
        <div id="LB.js" class="LightBox">

            <!-- login form -->
            <form class="LightBox-content ZoomAnim" name="login" method="post">

                <!-- login form -->
                <div class="imgLB-Section">
                    <!-- close button -->
                    <span onclick="document.getElementById('LB.js').style.display='none'" class="close" title="Close LightBox"> &times; </span>

                    <!-- cartoon wizard image -->
                    <img src="md/wiz.webp" alt="SignAcc" class="SignAcc">
                </div>
            
                <div class="LB-Section" style="padding: 16px;">

                    <!-- username label and text input -->
                    <label for="UserName" style="color: #5171ff;"><strong> Username <br></label>
                    <input type="text"  name="logName" placeholder="Enter Username" required>
                    
                    <!-- password label and text input -->
                    <label for="Pass" style="color: #5171ff;"><strong><br> Password <br></label>
                    <input type="password" name="logPass" placeholder="Enter Password" required>
                    <button type="submit" name="logSubmit" class="logIn">Login</button>
                </div>
            
                <div class="LB-Section" style="background-color:#202020;; padding: 16px;">
                    <!-- cancel button -->
                    <button type="button" onclick="document.getElementById('LB.js').style.display='none'" class="Cancel"> Cancel </button>
                </div>

            </form>
        </div>
<?php
    } ?>

</body>


<footer>

    <div>
        <!-- left footer division - text and social media link buttons -->
        <div class="followUs" style="margin-top: 60px; width: 300px; float:left;">
            <h3 style="font-size: 16px; margin-left: 70px; margin-bottom: 10px;"> FOLLOW US </h3>
            
            <input style="margin-left: 70px; margin-right: 5px; color: #fff;" type="image" src="md/git.png" alt="GitHub" title="Explore our GitHub!">
            <input style="margin-left: 5px; margin-right: 5px;" type="image" src="md/youtube.png" alt="Youtube" title="Watch our Youtube!">
            <input style="margin-left: 5px; margin-right: 5px;" type="image" src="md/insta.png" alt="Instagram" title="Visit our Instagram!">
        </div>

        <!-- right footer divison - page anhor buttons, texts and copyrighting, email input text and send email button  -->
        <div style="width: 700px; height: 150px; float: right; margin-top: 80px;">
            
            <a href="http://localhost/Technical_Assessment/about-us.php" style="margin-left: 25px;">ABOUT US</a>
            <a href="http://localhost/Technical_Assessment/contact-us.php"><div class="verT">CONTACT US</div></a>
            <a href="http://localhost/Technical_Assessment/premium-user.php"><div class="verT">OUR TOOLS</div></a>  
            <a href="http://localhost/Technical_Assessment/sign-account.php" style="margin-right: 25px;"><div class="verT">REGISTER</div></a>
            
            <h4 style="font-size: 13px; font-weight: lighter; text-align: left; margin-left: 45px; margin-bottom: 10px; opacity: 0.75;"> Designed and developed by NzFar. We Loungin', We Legends. </h3>
            <h3 style="color: rgb(255, 255, 255, 0.5); font-size: 12px; font-weight: normal; text-align: left; margin-left: 45px; margin-bottom: 60px;"> © 2021 GNS. All Rights Reserved. </h3>
            
            <table>
                <tr>
                    <input class="SubMail" placeholder="Enter Email" type="text" maxlength="30">
                </tr>
                <tr>
                    <input class="SubMailBttn" type="submit" value="SEND ME">
                </tr>
            </table>

        </div>

    </div>
</footer>

<!-- Javascript -->
<script src="JS/genJS.js"></script>

</html>