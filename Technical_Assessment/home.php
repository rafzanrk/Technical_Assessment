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
    <meta name="description" content="Home | GNS">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="#000fff">

    <!-- page title and icon -->
    <title>Home | GNS</title>
    <link rel="icon" href="http://localhost/Technical_Assessment/md/ico.png">

    <!-- linking CSS for styling page -->
    <link rel="stylesheet" href="themecss.css">

    <div class="h8der">

        <!-- header web logo -->
        <div>
            <img class="logoWeb" src="md/ico.png" alt="GRA Wiz" title="Warmly Welcomed!"/>
        </div>
        
        <!-- header anchor button -->
        <div>
            <a class="xtvate-h8d">HOME</a>
            <a href="http://localhost/Technical_Assessment/about-us.php"> ABOUT</a>
            <a href="http://localhost/Technical_Assessment/contact-us.php">CONTACT</a>
            <a href="http://localhost/Technical_Assessment/APIs.php">APIs</a>
            <a href="http://localhost/Technical_Assessment/premium-user.php">TOOLS</a>      
        </div>

        <!-- header start signup button -->
        <input class="logoWiz" style="margin-right: 20px;" type="image" src="md/wiz.png" alt="Sign Up Now!" title="Sign Up Now!" onclick="window.location.href='sign-account.php'">

        <!-- header start login button -->
        
        <input class="logoWiz" style="margin-right: 65px;" type="image" src="md/hitwand.png" onclick="getElementById('LB.js').style.display='block'" >
  
           
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
            header("Location: APIs.php");
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

<body>
    <center> 
        
        <!-- slideshow -->
        <div class="slidershow mid">

            <!-- each slide page -->
            <div class="slides">
                <!-- radio buttons -->
                <input type="radio" name="rad" id="r1" checked>
                <input type="radio" name="rad" id="r2">
                <input type="radio" name="rad" id="r3">
            
                <!-- slide 1, 2 and 3 -->
                <div class="slide s1" style="background-image: url('md/gif/Net.gif');">
                
                    <h1>Enhance Your Gaming Experience <br>
                        <!-- go to tools page button -->
                        <input type="button" value="GET TOOLS" class="infoButton" onclick="window.location.href='http://localhost/Technical_Assessment/premium-user.php'">
                    </h1>
                </div>
                
                <div class="slide" style="background-image: url('md/gif/Map.gif');">
                    <h1>Need Help? Contact Us Now <br>
                        <!-- go to contact page button -->
                        <input type="button" value="CONTACT US" class="infoButton" onclick="window.location.href='http://localhost/Technical_Assessment/contact-us.php'">
                    </h1>
                </div>
                
                <div class="slide" style="background-image: url('md/gif/Wave.gif');">
                    <h1>Get APIs <br> 
                        <!-- go to about page button -->
                        <input type="button" value="EXPLORE" class="infoButton" onclick="window.location.href='http://localhost/Technical_Assessment/APIs.php'">
                    </h1>
                </div>
            </div>
      
            <!-- navigation bars  -->
            <div class="nav">
              <label for="r1" class="bar"></label>
              <label for="r2" class="bar"></label>
              <label for="r3" class="bar"></label>
            </div>
        
        </div>

        <!-- slideshow division background size -->
        <div style="height: 690px; margin-bottom: 100px;"></div>

        <!-- website general info -->
        <div class="infoX" style="margin-bottom: 90px;"> 
            
            <!-- show image -->
            <img src="md/magic.png" alt="" title="" width= 50px; height= 50px/>

            <!-- paragraph on web info -->
            <p style="font-size: 18px; margin-left: 22%; margin-right: 22%; margin-top: 3%; margin-bottom: 10%;">
                For over 3 months, we have been committed to providing the community with the highest level of service and technical support, access to the powerful open-source program tools and resources, plus the friendliest user forums.
            </p>

        </div>

        <!-- go to tools page button -->
        <div class="Tpics">
            
            <!-- Nvidia link -->
            <div class="HoverBG" style="background-image: url('md/gif/Nvidia1.gif');"> 
                <input type="button" title="Go to Nvidia tool" value="Nvidia" text style="color:#ffc400; width: 100%;" onclick="window.location.href='premium-user.php#Nvidia'">
            </div> 
            
            <!-- AMD link -->
            <div class="HoverBG" style="background-image: url('md/gif/Amd1.gif');">
                <input type="button" title="Go to AMD tool" value="AMD" text style="color:#ffc400; width: 100%;" onclick="window.location.href='premium-user.php#AMD'">
            </div>

            <!-- DirectX -->
            <div class="HoverBG" style="background-image: url('md/gif/Directx.gif');">
                <input type="button" title="Go to DirectX tool" value="DirectX" text style="color:#ffc400; width: 100%;" onclick="window.location.href='premium-user.php#Directx'">
            </div>

        </div>
    </center>

</body>

<footer>

    <div style="background-color: #ffc400; height: 250px; padding-top: 50px;">  

        <center> 

            <!-- big footer text -->
            <div class="HomeTitle">
                <h1 style="font-size: 45px; padding-top:30px;"> EXPLORE OUR CYBER WORLD </h1>
            </div>

            <!-- About GRA and register buttons -->
            <input type="button" value="KNOW US" onclick="window.location.href='http://localhost/Technical_Assessment/about-us.php'">
            <input type="button" value="JOIN US" onclick="window.location.href='http://localhost/Technical_Assessment/sign-account.php'">
        
        </center>

    </div>

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
            <a href="http://localhost/Technical_Assessment/premium-user.php"><div class="verT">GET TOOLS</div></a>  
            <a href="http://localhost/Technical_Assessment/sign-account.php" style="margin-right: 25px;"><div class="verT">REGISTER</div></a>
            
            <h4 style="font-size: 13px; font-weight: lighter; text-align: left; margin-left: 45px; margin-bottom: 10px; opacity: 0.75;"> Designed and developed in German-Malaysian Institute. We Share, We Dare. </h3>
            <h3 style="color: rgb(255, 255, 255, 0.5); font-size: 12px; font-weight: normal; text-align: left; margin-left: 45px; margin-bottom: 60px;"> © 2021 GRA. All Rights Reserved. </h3>
            
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

</html>