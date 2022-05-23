<nav class="navbar navbar-expand-md navbar-dark" id="navbar">
      <div
        class="container-fluid d-lg-flex justify-content-between align-items-baseline pe-2"
      >
        <div id="brand-logo">
          <a
            class="navbar-brand mx-3"
            href="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/admin_dboard.php"
            style="color: #fc5404; font-weight: 700; font-size: 2rem"
            >SCHOLARWISE</a
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
                <button class="dropbtn">Register User</button>

                <div class="dropdown-content">
                  <a href="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/Register%20Users/register_student.php"> Student</a>

                  <a href="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/Register%20Users/register_faculty.php"> Faculty</a>
                </div>
              </li>

              <li class="dropdown">
                <button class="dropbtn">Remove User</button>

                <div class="dropdown-content">
                  <a href="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/Register%20Users/remove_student.php"> Student</a>

                  <a href="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/Register%20Users/remove_faculty.php"> Faculty</a>
                </div>
              </li>

              <li class="dropdown">
                <button class="dropbtn">
                  <img
                    src="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/icons/user1.png"
                    width="40"
                    height="40"
                  />
                  <?php echo $_SESSION['name']; ?>
                </button>

                <div class="dropdown-content">
                  <a
                    href="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/admin_changepword.php"
                  >
                    <i class="fa fa-lock"></i>
                    Change password</a
                  >

                  <a href="#">
                    <i class="fa fa-download"></i>
                    Student List
                    <span class="badge bg-secondary d-none">4</span></a
                  >

                  <a href="#">
                    <i class="fa fa-download"></i>
                    Faculty List</a
                  >

                  <a
                    href="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/logout.php"
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