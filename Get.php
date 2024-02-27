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
    <meta name="description" content="Tools | GNS">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="#000fff">

    <!-- page title and icon -->
    <title>Tools | GNS</title>
    <link rel="icon" href="http://localhost/Technical_Assessment/md/icon.png">

    <!-- linking CSS for styling page -->
    <link rel="stylesheet" href="themecss.css">

    <div class="h8der">

        <!-- header web logo -->
        <div>
            <img class="logoWeb" src="md/icon.png" alt="GNS Wiz" title="We Got'Em!"/>
        </div>
        
        <!-- header anchor button -->
                 
        <div>
            <a class="unselectable">HOME</a>
            <a class="unselectable"> ABOUT</a>
            <a class="unselectable">CONTACT</a>
            <a href="http://localhost/Technical_Assessment/Drivers.php">DRIVERS</a>
            <a class="xtvate-h8d unselectable">CONNECT</a>  
            <a>HELLO THERE!</a>
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
        <h1> FIND OTHERS AND MAYBE FIND YOUR FRIENDS! </h1>
    </div>

            <center><div class="toolBG">
            
            <!-- register form headline -->
            <h2 style="padding-top: 25px; margin-bottom: -7.5px; letter-spacing: 3px;"> SEARCH! </h2>

        <!-- Search section -->
        <div class="SUp-Section" style="margin-top: 50px; margin-bottom: 30px;">
                        
            <!-- API submit button -->
            <button  type="submit" name="get" class="signUp xtvate-h8d unselectable">Look At The Users So Far</button>
            <button type="submit" name="post" class="signUp"onclick="window.location.href='http://localhost/Technical_Assessment/Post.php'">Create New Users</button>
            <button type="submit" name="delete" class="signUp">Remove User</button>
        </div>

        <div style="padding: 25px;">
                <script>
                fetch("https://gorest.co.in/public/v1/posts").then(
                res => {
                    res.json().then(
                    data => {
                        console.log(data.data);
                        if (data.data.length > 0) {

                        var temp = "";
                        data.data.forEach((itemData) => {
                            temp += "<tr>";
                            temp += "<td>" + itemData.id + "</td>";
                            temp += "<td><td>" + itemData.user_id + "</td>";
                            temp += "<td><td>" + itemData.title + "</td>";
                            temp += "<td><td>" + itemData.body + "</td></tr>";
                        });
                        document.getElementById('data').innerHTML = temp;
                        }
                    }
                    )
                }
                )
                </script>
                <div class="container">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th><td>User ID</th>
                        <th><td>Title</th>
                        <th><td>Body</th>
                    </tr>
                    </thead>
                    <tbody id="data">

                    </tbody>
                </table>
                </div>

        </div>
        </form>
    
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
            <a href="http://localhost/Technical_Assessment/Drivers.php"><div class="verT">OUR TOOLS</div></a>  
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