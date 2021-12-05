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
    <meta name="description" content="Contact | GNS">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="#000fff">

    <!-- linking CSS for styling page -->
    <link rel="stylesheet" href="themecss.css">

    <!-- page title and icon -->
    <title>Contact | GNS</title>
    <link rel="icon" href="http://localhost/Technical_Assessment/md/ico.png">

    <div class="h8der">

        <!-- header web logo -->
        <div>
            <img class="logoWeb" src="md/ico.png" alt="GRA Wiz" title="We Got'Em!"/>
        </div>
        
        <!-- header anchor button -->
        <div>
            <a href="http://localhost/Technical_Assessment/home.php">HOME</a>
            <a href="http://localhost/Technical_Assessment/about-us.php"> ABOUT</a>
            <a class="xtvate-h8d">CONTACT</a>
            <a href="http://localhost/Technical_Assessment/APIs.php">APIs</a>
            <a href="http://localhost/Technical_Assessment/premium-user.php">TOOLS</a>  
        </div>

        <!-- header start signup button -->
        <input class="logoWiz" style="margin-right: 20px;" type="image" src="md/wiz.png" alt="Sign Up Now!" title="Sign Up Now!" onclick="window.location.href='sign-account.php'">

        <!-- header start login button -->
        <input class="logoWiz" style="margin-right: 65px;" type="image" src="md/hitwand.png" alt="Login to Get Our Tools!" title="Login to Get Our Tools!" onclick="window.location.href='premium-user.php'">

    </div>
</head>

<body>

    <!-- Contact us page headline and paragraphs -->
    <div class="contactBG"><center>
        <h1> Get in Touch 
            <p style="font-size: 17px; letter-spacing: 1px; width: 70%;">Have a question? We'd be happy to point you in the right direction. Please feel free to send us an email or give us a call.</p> 

            <div style="font-size: 23px; margin-top: 50px">

                &#9742; <span class="cont8" id="inputTxt1" title="Click to copy phone number"> +601-137560186 </span>
                
                <b style="margin-left: 10%;"> &#9993; <span class="cont8" id="inputTxt2" title="Click to copy email address">info@gra.net</span>

            </div>
        </h1>        
    </center></div>

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
<script>

    // copy phone number by just on click
    const spanCopy1 = document.getElementById("inputTxt1");
    spanCopy1.onclick = function() { document.execCommand("copy"); }

    spanCopy1.addEventListener("copy", function(event) 
    {
        // save to clipboard when click the text
        event.preventDefault();
        if (event.clipboardData)
        {
            event.clipboardData.setData("text/plain", spanCopy1.textContent);
            console.log(event.clipboardData.getData("text"))
        }
    } );

    // copy email address by just on click
    const spanCopy2 = document.getElementById("inputTxt2");
    spanCopy2.onclick = function() { document.execCommand("copy"); }

    spanCopy2.addEventListener("copy", function(event) 
    {
        // save to clipboard when click the text
        event.preventDefault();
        if (event.clipboardData)
        {
            event.clipboardData.setData("text/plain", spanCopy2.textContent);
            console.log(event.clipboardData.getData("text"))
        }
    } );

</script>

</html>