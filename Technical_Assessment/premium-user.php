<!--===========================================
                    AUTHOR
    --------------------------------------
    RAFZAN B ROSHAM (FRONT-END ASSESSMENT)
============================================-->

<?php
    include("session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Ensure the the page displays correctly across the browsers -->
    <meta charset="UTF-8">
    <meta name="description" content="Tools | GNS">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="#000fff">

    <!-- page title and icon -->
    <title>Tools | GNS</title>
    <link rel="icon" href="http://localhost/Technical_Assessment/md/ico.png">

    <!-- linking CSS for styling page -->
    <link rel="stylesheet" href="themecss.css">

    <div class="h8der">

        <!-- header web logo -->
        <div>
            <img class="logoWeb" src="md/ico.png" alt="GRA Wiz" title="We Got'Em!"/>
        </div>
        
        <!-- header anchor button -->
                 
        <div>
            <a class="unselectable">HOME</a>
            <a class="unselectable"> ABOUT</a>
            <a class="unselectable">CONTACT</a>
            <a href="http://localhost/Technical_Assessment/APIs.php">APIs</a>
            <a class="xtvate-h8d unselectable">TOOLS</a>  
            <a>HELLO THERE!</a>
            <a class="xtvate-h8d"><?php echo $_SESSION['Username'];?></a>  
        </div>

        <!-- logout button -->
        <input class="logoWiz" style="margin-right: 20px;" type="image" src="md/goback.png" alt="Logout Now" title="Logout Now" onClick="location.href='signout.php'">

        <!-- edit button -->
        <input class="logoWiz" style="margin-right: 65px;" type="image" src="md/clok.png" alt="Sign Up Now!" title="Edit Account" onclick="getElementById('LB.js').style.display='block'">

    </div>
</head>

<body>

    <!-- Editbox -->
    <div id="LB.js" class="EditBox">

        <!-- Edit form -->
        <form class="EditBox-content ZoomAnim" action="edit.php" name="edit" method="post">

            <!-- Edit form -->
            <div class="imgLB-Section">
                <!-- close button -->
                <span onclick="document.getElementById('LB.js').style.display='none'" class="close" title="Close LightBox"> &times; </span>

                <!-- cartoon wizard image -->
                <img src="md/pers.webp" alt="EditAcc" class="EditAcc">
            </div>

            <div class="LB-Section" style="padding: 16px;">

                <!-- change username text input -->
                <label for="UserName" style="color: #ffc400;"><strong> Username <br></label>
                <input type="text" name="username" placeholder="Change Your Username" required>

                <!-- change email text input -->
                <label for="Email" style="color: #ffc400;"><strong> Email Address <br></label>
                <input type="email" name="email" placeholder="Change Your Email Address" required>

                <!-- change password text input -->
                <label for="Pass" style="color: #ffc400;"><strong><br> Password <br></label>
                <input type="password" name="password" placeholder="Enter Your Password" required>

            </div>

            <div class="LB-Section" style="background-color:#202020;; padding: 16px;">
                <!-- cancel button -->
                <button type="button" onclick="document.getElementById('LB.js').style.display='none'" class="Cancel"> Cancel </button>
                <button type="submit" onclick="" class="Updt"> Update </button>
            </div>

        </form>
    </div>
   

    <!-- top background cover and text -->
    <div class="fadeIn-BG">  
        <h1> GRAB OUR TOOLS BELOW! </h1>
    </div>

    <center><div class="toolBG">
    
        <!-- hxd editor anchor -->
        <a name="hxd"></a>
        
        <div style="margin-top: 50px; height: 400px;">

            <!-- sample image of hxd editor interface -->
            <img style="float: left;" src="md/gif/gif_hxd.gif" alt="HxD Editor">

            <!-- headlines and paragraphs of tool info -->
            <div style="width: 600px;  float: right; text-align: left; margin-left: 10px;">
                <h1> HxD Editor to hex em' up! </h1>
                <p>Inspect and edit any file, memory, or disk. Checksums, insertion of byte patterns, file shredder, concatenation or splitting of files, statistics etc.</p>
                
                <!-- download button -->
                <input type="button" value="DOWNLOAD" onclick="window.open('https://gorest.co.in', '_blank')"></a>
            </div>
        </div>

        <!-- futureboy anchor -->
        <a name="futureboy"></a>

        <div style="margin-top: 50px; height: 400px; padding-top: 50px;">

            <!-- headlines and paragraphs of tool info -->
            <div style="width: 600px;  float: left; text-align: left;">
                <h1> Stega O Futureboy </h1>
                <p>Hide secret messages or files in the pictures. This tool uses steganography techniques to hide secret information invisibly in an image or audio files.</p>
                
                <!-- download button -->
                <input style="margin-bottom: 20px;" type="button" value="DOWNLOAD" onclick="window.open('http://futureboy.us/stegano/', '_blank')">
                
            </div>
            <!-- sample image of futureboy interface -->
            <img style="float: right;" src="md/gif/gif_fbo.gif" alt="Futureboy">
        </div>

        <!-- cyberchef anchor -->
        <a name="cyberchef"></a>

        
        <div style="margin-top: 50px; height: 400px;">

            <!-- headlines and paragraphs of tool info -->
            <div style="width: 600px; float: right; text-align: left; padding-top: 50px">
                <h1> Bake your data with CyberChef </h1>
                <p>Explore data formats, encryption and compression. Designed to manipulate data in complex ways without having to deal with complex tools or algorithms.</p>

                <!-- download button -->
                <input type="button" value="DOWNLOAD" onclick="window.location.href='CyberChef_v9.28.0.rar'">
            </div>
            
            <!-- sample image of cyberchef interface -->
            <img style="float: left; padding-top: 30px; margin-bottom: 50px;" src="md/gif/gif_chf.gif" alt="CyberChef">
        </div>
    </div></center>

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
<script src="JS/genJS.js"></script>


</html>