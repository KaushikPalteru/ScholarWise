<?php 

session_start();
include 'myfilemgr/db.php';

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
    <title>File Manager</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link
      rel="icon"
      type="image/x-icon"
      href="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/icons/user.png"
    />
    <link
      rel="stylesheet"
      href="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/admin_dboard.css"
      type="text/css"
    />
    <link
      href="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/pe-icon-7-stroke.css"
      rel="stylesheet"
    />
    <link
      href="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/ct-navbar.css"
      rel="stylesheet"
    />
    <link
      href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="filemanager.css" />
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/admin_dboard.js"></script>

  </head>
  <body class="pt-0 mt-0" style="
      font-family: 'Montserrat', sans-serif, Helvetica, 'Franklin Gothic Medium',
        'Arial Narrow', Arial;
    ">

    <nav class="navbar navbar-expand-md navbar-dark sticky-top pt-2 mt-0 mb-3" id="navbar">
      <div
        class="container-fluid d-lg-flex justify-content-between align-items-baseline pe-2"
      >
        <div id="brand-logo">
          <a
            class="navbar-brand mx-3"
            href="http://localhost:7882/UP-2%20Source%20Code/Faculty/faculty_dboard.php"
            style="color: #fc5404; font-weight: 700; font-size: 2rem"
          >
            SCHOLARWISE</a
          >
        </div>

        <div id="brand-items">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul
              class="navbar-nav me-auto mb-2 mb-lg-0 d-lg-flex justify-content-between"
            >
              <li class="dropdown">
                <button class="dropbtn px-0" style="text-align: center;">News Feed</button>

                <div class="dropdown-content px-0" style="text-align: center;">
                  <a href="faculty_newsfeed.html">
                    See Posts</a
                  >

                  <a href="faculty_newsfeed.html">
                    Upload posts</a
                  >
                </div>
              </li>

              <li class="dropdown"">
                <button class="dropbtn px-0" style="text-align: center;">
                  Resources
                </button>

                <div class="dropdown-content px-0" style="text-align: center;">
                  <a href="faculty_filemanager.php"> Access</a>

                  <a href="faculty_filemanager.php"> Upload</a>
                </div>
              </li>

              <li class="dropdown">
                <button class="dropbtn">
                  <div style="transform: translateX(-20px)">
                    <img
                      src="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/icons/user1.png"
                      width="40"
                      height="40"
                    />
                    <?php echo $_SESSION['fa_name']; ?>   
                  </div>
                </button>

                <div class="dropdown-content">
                  <a href="http://localhost:7882/UP-2%20Source%20Code/Faculty/faculty_profile.php">
                    <i class="fa fa-download"></i>
                    My Profile
                  </a>

                  <a href="http://localhost:7882/UP-2%20Source%20Code/Faculty/faculty_changepword.php">
                    <i class="fa fa-lock"></i>
                    Change password</a
                  >

                  <a
                    href="http://localhost:7882/UP-2%20Source%20Code/Faculty/logout.php"
                  >
                    <i class="fa fa-sign-out"></i>
                    Logout</a
                  >
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <?php include 'file_manager.php' ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
