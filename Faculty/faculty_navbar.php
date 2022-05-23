<nav class="navbar navbar-expand-md navbar-dark sticky-top" id="navbar">
      <div
        class="container-fluid d-lg-flex justify-content-between align-items-baseline pe-2"
      >
        <div id="brand-logo">
          <a
            class="navbar-brand mx-3"
            href="http://localhost:7882/Up-2%20Source%20Code/Faculty/faculty_dboard.php"
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
                  <a href="http://localhost:7882/Up-2%20Source%20Code/Faculty/faculty_newsfeed.php">
                    See Posts</a
                  >

                  <a href="http://localhost:7882/Up-2%20Source%20Code/Faculty/faculty_newsfeed.php">
                    Upload posts</a
                  >
                </div>
              </li>

              <li class="dropdown"">
                <button class="dropbtn px-0" style="text-align: center;">
                  Resources
                </button>

                <div class="dropdown-content px-0" style="text-align: center;">
                  <a href="http://localhost:7882/UP-2%20Source%20Code/File%20Uploader/File%20Manager/faculty_filemanager.php"> Access</a>

                  <a href="http://localhost:7882/UP-2%20Source%20Code/File%20Uploader/File%20Manager/faculty_filemanager.php"> Upload</a>
                </div>
              </li>

              <li class="dropdown">
                <button class="dropbtn">
                  <div style="transform: translateX(-15px)">
                    <img
                      src="http://localhost:7882/UP-2%20Source%20Code/Student/stud_icons/user1.png"
                      width="40"
                      height="40"
                    />
                    <?php echo $_SESSION['fa_name']; ?>
                  </div>
                </button>

                <div class="dropdown-content">
                  <a href="http://localhost:7882/Up-2%20Source%20Code/Faculty/faculty_profile.php">
                    <i class="fa fa-download"></i>
                    My Profile
                  </a>

                  <a href="http://localhost:7882/Up-2%20Source%20Code/Faculty/faculty_changepword.php">
                    <i class="fa fa-lock"></i>
                    Change password</a
                  >

                  <a
                    href="http://localhost:7882/Up-2%20Source%20Code/Faculty/logout.php"
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