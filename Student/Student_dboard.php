<?php 

session_start();

if(!isset($_SESSION['sname'])) {
  echo "You are logged out!";
  header('location:student_login_page.php');
  
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student</title>
    <?php include 'student links/student_links.php' ?>
    
  </head>

  <body
    style="
      font-family: 'Montserrat', sans-serif, Helvetica, 'Franklin Gothic Medium',
        'Arial Narrow', Arial;
    "
  >
    
    <?php include 'student_navbar.php' ?>

    <div class="panel pricing-table mt-5 justify-content-evenly" style="margin: auto">
      <div class="pricing-plan">
        <img
          src="stud_icons\newsfeed.png"
          alt=""
          class="pricing-img"
        />
        <h2 class="pricing-header">News Feed</h2>

        <a
          href="http://localhost:7882/UP-2%20Source%20Code/Newsfeed/news_feed.html"
          class="pricing-button register"
          >Go</a
        >
      </div>

      <div class="pricing-plan">
        <img
          src="stud_icons/resources.png"
          alt=""
          class="pricing-img"
          id="reduce-height"
        />
        <h2 class="pricing-header">Resources</h2>

        <a
          href="http://localhost:7882/UP-2%20Source%20Code/File%20Uploader/File%20Manager/student_filemanager.php"
          class="pricing-button register"
          >Go</a
        >
      </div>

      <div class="pricing-plan">
        <img
          src="stud_icons/user1.png"
          alt=""
          class="pricing-img"
          id="reduce-height"
          style="width: 192px; height: 192px;"
        />
        <h2 class="pricing-header">Profile</h2>
        <a
          href="viewprofile.php"
          class="pricing-button register btn"
          >Go</a
        >
      </div>

    </div>

     <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
