<?php 

session_start();

if(!isset($_SESSION['name'])) {
  echo "You are logged out!";
  header('location:admin_login_page.php');
  
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ScholarWise Admin</title>
    <link rel="icon" type="image/x-icon" href="user.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="admin_dboard.css" type="text/css" />
    <link href="pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="ct-navbar.css" rel="stylesheet" />
    <link
      href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <script src="admin_dboard.js"></script>
  </head>

  <body
    style="
      font-family: 'Montserrat', sans-serif, Helvetica, 'Franklin Gothic Medium',
        'Arial Narrow', Arial;
    "
  >
    <nav class="navbar navbar-expand-md navbar-dark" id="navbar">
      <div
        class="container-fluid d-lg-flex justify-content-between align-items-baseline"
      >
        <div id="brand-logo">
          <a
            class="navbar-brand mx-3"
            href="#"
            style="color: #fc5404; font-weight: 700; font-size: 2rem"
            >SCHOLARWISE</a
          >
        </div>

        <div class="dropdown">
          <button class="dropbtn">
            <img src="icons/user1.png" width="40" height="40" /> <?php echo $_SESSION['name']; ?>
          </button>

          <div class="dropdown-content">
            <a href="admin_changepword.php">
              <i class="fa fa-lock"></i>
              Change password</a
            >

            <a href="#">
              <i class="fa fa-download"></i>
              Student List <span class="badge bg-secondary d-none">4</span></a
            >

            <a href="#">
              <i class="fa fa-download"></i>
              Faculty List</a
            >

            <a href="logout.php">
              <i class="fa fa-sign-out"></i>
              Logout</a
            >
          </div>
        </div>
      </div>
    </nav>

    <div class="panel pricing-table mt-5" style="margin: auto">
      <div class="pricing-plan">
        <img src="icons/add_stud.png" alt="" class="pricing-img" />
        <h2 class="pricing-header">Register Student</h2>

        <a
          href="Register Users/register_student.php"
          class="pricing-button register"
          >Add</a
        >
      </div>

      <div class="pricing-plan">
        <img
          src="icons/add_facul.png"
          alt=""
          class="pricing-img"
          id="reduce-height"
        />
        <h2 class="pricing-header">Register Faculty</h2>

        <a
          href="Register Users/register_faculty.php"
          class="pricing-button register"
          >Add</a
        >
      </div>

      <div class="pricing-plan">
        <img
          src="icons/rem_stud.png"
          alt=""
          class="pricing-img"
          id="reduce-height"
        />
        <h2 class="pricing-header">Remove Student</h2>

        <!-- <span class="pricing-price">Rs.1500/-</span> -->
        <a
          href="Register Users/remove_student.php"
          class="pricing-button remove btn"
          >Remove</a
        >
      </div>

      <div class="pricing-plan">
        <img src="icons/rem_facul.png" alt="" class="pricing-img" />
        <h2 class="pricing-header">Remove Faculty</h2>
        <a
          href="Register Users/remove_faculty.php"
          class="pricing-button remove"
          >Remove</a
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
