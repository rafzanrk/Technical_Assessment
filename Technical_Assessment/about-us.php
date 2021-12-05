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
    <link rel="icon" href="http://localhost/Technical_Assessment/md/ico.png">

    <!-- linking CSS for styling page -->
    <link rel="stylesheet" href="themecss.css">

    <div class="h8der">

        <!-- header web logo -->
        <div>
            <img class="logoWeb" src="md/ico.png" alt="GRA Wiz" title="Let Us Introduce!"/>
        </div>
        
        <!-- header anchor button -->
        <div>
            <a href="http://localhost/Technical_Assessment/home.php">HOME</a>
            <a class="xtvate-h8d"> ABOUT</a> 
            <a href="http://localhost/Technical_Assessment/contact-us.php">CONTACT</a>
            <a href="http://localhost/Technical_Assessment/APIs.php">APIs</a>
            <a href="http://localhost/Technical_Assessment/premium-user.php">TOOLS</a>  
        </div>

        <!-- header start signup button -->
        <input class="logoWiz" style="margin-right: 20px;" type="image" src="md/wiz.png" alt="Sign Up Now!" title="Sign Up Now!" onclick="window.location.href='sign-account.php'">

        <!-- header start login button -->
        <input class="logoWiz" style="margin-right: 65px;" type="image" src="md/hitwand.png" alt="Login to Get Our Tools!" title="Login to Get Our Tools!" onclick="window.location.href='premium-user.php'">

    </div>
</head>


<body class="bodyBout">

    <center>
        <!-- interactive javascipted background -->
        <div>
            <div id="CanvasTxt">
                <canvas></canvas>
                <div id="RevealTxt">
                    <div class="TopTxt">Let's</div>
                    <div class="BotTxt"> 
                      <span></span>
                    </div>
                </div>
                <p style="margin-top: 50px; font-size: 12px; opacity: 0.4;">A Tools Sharing & Review Website.</p>
            </div>
        </div>
        
        <!-- about us background 1 -->
        <div class="BoutBG1">
            <div class="BoutInfo">
                <span class="BoutCont" style="background-color: transparent; font-size:25px; color: #fff;">WE DARE</span>
            </div>
        </div>
        
        <!-- about us info 1 -->
        <div>
            <div class="info1" style="color:#fff; background-color:#202020; padding:50px 80px;">
                <p>We dare to trade good for true. We as the developers of information security tools intended to come up with a platform for individuals to connect and interact with each other. We provide users to connect with each other through forums. </p>
            </div>
        </div>
        
        <!-- about us background 2 -->
        <div class="BoutBG2">
            <div class="BoutInfo">
                <span class="BoutCont" style="background-color: transparent; font-size:25px; color: #fff;">WE SHARE</span>
            </div>
        </div>
          
        <!-- about us info 2 -->
        <div>
            <div class="info2" style="color:#000; background-color:#ffc400; padding:50px 80px;">
                <p>We build and function within our relationships. We are also imparting part and parcel of ourselves in order to signify that our tools are secured to give to you. Enabling us to and maximize the potential and improvement of these tools through feedbacks and open-source works.</p>
            </div>
        </div>
    </center>


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

<!-- Javascript -->
<script src="JS/nodeAbout.js"></script>

</html>