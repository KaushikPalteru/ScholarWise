<nav class="navbar navbar-expand-md navbar-dark pt-2 mt-0 mb-3" id="navbar">
      <div
        class="container-fluid d-lg-flex justify-content-between align-items-baseline pe-2"
      >
        <div id="brand-logo">
          <a
            class="navbar-brand mx-3"
            href="http://localhost:7882/UP-2%20Source%20Code/Student/student_dboard.php"
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
                  <a href="http://localhost:7882/UP-2%20Source%20Code/Newsfeed/news_feed.html">
                    See Posts</a
                  >

                  <a href="http://localhost:7882/UP-2%20Source%20Code/Newsfeed/news_feed.html">
                    Upload Posts</a
                  >
                </div>
              </li>

              <li class="dropdown"">
                <button class="dropbtn px-0" style="text-align: center;">
                  Resources
                </button>

                <div class="dropdown-content px-0" style="text-align: center;">
                  <a href="http://localhost:7882/UP-2%20Source%20Code/File%20Uploader/File%20Manager/student_filemanager.php"> Access</a>

                  <a href="http://localhost:7882/UP-2%20Source%20Code/File%20Uploader/File%20Manager/student_filemanager.php"> Upload</a>
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
                    <?php echo $_SESSION['sname']; ?>
                  </div>
                </button>

                <div class="dropdown-content">
                  <a href="http://localhost:7882/UP-2%20Source%20Code/Student/viewprofile.php">
                    <i class="fa fa-download"></i>
                    My Profile
                  </a>

                  <a href="http://localhost:7882/UP-2%20Source%20Code/Student/change_password.php">
                    <i class="fa fa-lock"></i>
                    Change password</a
                  >

                  <a
                    href="http://localhost:7882/UP-2%20Source%20Code/Student/logout.php"
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