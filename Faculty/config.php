<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "scholarwise_users";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($con)
{
    ?>
        <script>console.log("Connection successful")</script>
    <?php
	
}

else {
     ?>
        <script>alert("Connection unsuccessful")</script>
    <?php
	
}