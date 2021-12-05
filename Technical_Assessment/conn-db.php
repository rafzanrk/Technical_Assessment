<!--===========================================
                    AUTHOR
    --------------------------------------
    RAFZAN B ROSHAM (FRONT-END ASSESSMENT)
============================================-->


<?php
    // If we have not set database password on localhost, we can set empty.
    $conn = mysqli_connect("localhost","root","root","gns");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
