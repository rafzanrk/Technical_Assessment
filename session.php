<!--===========================================
                    AUTHOR
    --------------------------------------
    RAFZAN B ROSHAM (FRONT-END ASSESSMENT)
============================================-->


<?php
    session_start();
    if(!isset($_SESSION["Username"])) {
        header("Location: sign-account.php");
        exit();
    }
?>
