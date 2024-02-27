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
    <meta name="description" content="About | GNS">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="#000fff">

    <!-- page title and icon -->
    <title>About | GNS</title>
    <link rel="icon" href="http://localhost/Technical_Assessment/md/icon.png">

    <!-- linking CSS for styling page -->
    <link rel="stylesheet" href="themecss.css">

    <div class="h8der">

        <!-- header web logo -->
        <div>
            <img class="logoWeb" src="md/icon.png" alt="GRA Wiz" title="Let Us Introduce!"/>
        </div>
        
        <!-- header anchor button -->
        <div>
            <a href="http://localhost/Technical_Assessment/home.php">HOME</a>
            <a class="xtvate-h8d"> ABOUT</a> 
            <a href="http://localhost/Technical_Assessment/contact-us.php">CONTACT</a>
            <a href="http://localhost/Technical_Assessment/Drivers.php">DRIVERS</a>
            <a href="http://localhost/Technical_Assessment/premium-user.php">CONNECT</a>  
        </div>

        <!-- header start signup button -->
        <input class="logoWiz" style="margin-right: 20px;" type="image" src="md/wiz.png" alt="Sign Up Now!" title="Sign Up Now!" onclick="window.location.href='sign-account.php'">

        <!-- header start login button -->
        <input class="logoWiz" style="margin-right: 65px;" type="image" src="md/hitwand.png" alt="Login to Get Our Tools!" title="Login to Get Our Tools!" onclick="getElementById('LB.js').style.display='block'" >

        <!-----------------Login Lightbox --------------------->
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
                    <label for="UserName" style="color: #ffc400;"><strong> Username <br></label>
                    <input type="text"  name="logName" placeholder="Enter Username" required>
                    
                    <!-- password label and text input -->
                    <label for="Pass" style="color: #ffc400;"><strong><br> Password <br></label>
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

    </div>
</head>


<body class="bodyBout">

    <center>
        <!-- interactive javascipted background -->
        <div>
            <div id="CanvasTxt2">
                <canvas></canvas>
                <div id="RevealTxt">
                    <div class="TopTxt">Let's</div>
                    <div class="BotTxt"> 
                      <span></span>
                    </div>
                </div>
                <p style="margin-top: 50px; font-size: 12px; opacity: 0.4;">A Website.</p>
            </div>
        </div>
        
        <!-- about us background 1 -->
        <div class="BoutBG1">
            <div class="BoutInfo">
                <span class="BoutCont" style="background-color: transparent; font-size:25px; color: #fff;">WE LOUNGIN'</span>
            </div>
        </div>
        
        <!-- about us info 1 -->
        <div>
            <div class="info1" style="color:#fff; background-color:#202020; padding:50px 80px;">
                <p>Reperta cum intulitque cum profaminique. Devolviebant foedantique fingeque, porcumque, arbitrarerisque. Favillaque nequeamus prensasque, versantque putandumque desperabamus consulerant cataracta. Damnaveratque inferreturque, labaremus, auersi capiebasque compellabantque conquirarque. </p>
            </div>
        </div>
        
        <!-- about us background 2 -->
        <div class="BoutBG2">
            <div class="BoutInfo">
                <span class="BoutCont" style="background-color: transparent; font-size:25px; color: #fff;">WE LEGENDS</span>
            </div>
        </div>
          
        <!-- about us info 2 -->
        <div>
            <div class="info2" style="color:#000; background-color:#002fff; padding:50px 80px;">
                <p>Dolavissesque per e a vocavissentque contrahere. Reponerunt clam velemur agenteque effodant, memoraveramque contendemus. Divinique vertisseque.</p>
            </div>
        </div>
    </center>


</body>


<footer>
    <div>
        
        <!-- left footer division - text and social media link buttons -->
        <div class="followUs" style="margin-top: 60px; width: 300px; float:left;">
            <h3 style="font-size: 16px; margin-left: 70px; margin-bottom: 10px;"> FOLLOW US </h3>  

            <input style="margin-left: 70px; margin-right: 5px; color: #fff;" type="image" src="md/git.png" alt="GitHub" title="Explore our GitHub!"onclick = "window.open('https://github.com/rafzanrk','_blank')">
            <input style="margin-left: 5px; margin-right: 5px;" type="image" src="md/youtube.png" alt="Youtube" title="Watch our Youtube!" onclick = "window.open('https://Youtube.com','_blank')">
            <input style="margin-left: 5px; margin-right: 5px;" type="image" src="md/insta.png" alt="Instagram" title="Visit our Instagram!" onclick = "window.open('https://blackscreen.app','_blank')">
        </div>

        <!-- right footer divison - page anhor buttons, texts and copyrighting, email input text and send email button  -->
        <div style="width: 700px; height: 150px; float: right; margin-top: 80px;">
            
            <a href="http://localhost/Technical_Assessment/about-us.php" style="margin-left: 25px;">ABOUT US</a>
            <a href="http://localhost/Technical_Assessment/contact-us.php"><div class="verT">CONTACT US</div></a>
            <a href="http://localhost/Technical_Assessment/Drivers.php"><div class="verT">GET TOOLS</div></a>  
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
<script src="JS/nodeAbout.js"></script>

</html>