<?php

session_start();

if(isset($_SESSION['fa_name']))
{
	unset($_SESSION['fa_name']);

}

header("Location: faculty_login_page.php");
die;