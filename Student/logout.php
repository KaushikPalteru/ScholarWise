<?php

session_start();

if(isset($_SESSION['sname']))
{
	unset($_SESSION['sname']);

}

header("Location: student_login_page.php");
die;