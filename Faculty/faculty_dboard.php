<?php 

session_start();

if(!isset($_SESSION['fa_name'])) {
  echo "You are logged out!";
  header('location:faculty_login_page.php');
  
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faculty</title>
    <?php include 'faculty_links.php' ?>
    
  </head>

  <body
    style="
      font-family: 'Montserrat', sans-serif, Helvetica, 'Franklin Gothic Medium',
        'Arial Narrow', Arial;
    "
  >
    <?php include 'faculty_navbar.php' ?>

    <div class="panel pricing-table mt-5 justify-content-evenly" style="margin: auto">

       <div class="pricing-plan">
        <img
          src="http://localhost:7882/UP-2%20Source%20Code/Student/stud_icons/resources.png"
          alt=""
          class="pricing-img"
          id="reduce-height"
        />
        <h2 class="pricing-header">Resources</h2>

        <a
          href="http://localhost:7882/UP-2%20Source%20Code/File%20Uploader/File%20Manager/faculty_filemanager.php"
          class="pricing-button register"
          >Go</a
        >
      </div> 

      <div class="pricing-plan">
        <img
          src="http://localhost:7882/UP-2%20Source%20Code/Student/stud_icons/newsfeed.png"
          alt=""
          class="pricing-img"
        />
        <h2 class="pricing-header">News Feed</h2>

        <a
          href="faculty_newsfeed.php"
          class="pricing-button register"
          >Go</a
        >
      </div>

      

      <div class="pricing-plan">
        <img
          src="http://localhost:7882/UP-2%20Source%20Code/Student/stud_icons/user1.png"
          alt=""
          class="pricing-img"
          id="reduce-height"
          style="width: 192px; height: 192px;"
        />
        <h2 class="pricing-header">Profile</h2>
        <a
          href="faculty_profile.php"
          class="pricing-button register btn"
          >Go</a
        >
      </div>

    </div>
  </body>
</html>
