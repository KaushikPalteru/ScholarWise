<?php
session_start();
  
  include 'config.php';

    	if($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['pword'];

        $email_id = " select * from admin where email = '$email' ";
        $query = mysqli_query($con, $email_id);
        $email_count = mysqli_num_rows($query);

        if($email_count) {
					$user_data = mysqli_fetch_assoc($query);;

          $db_password = $user_data['password'];
          $_SESSION['name'] = $user_data['name'];
          $_SESSION['email'] = $user_data['email'];


          if($db_password === $password)
					{
						header("Location: admin_dboard.php");
						die;
					}
          else {
            // echo "Incorrect passwrord";
            ?>
              <script>alert("Incorrect password")</script>
            <?php
          }

        }

        else {
          // echo "Invalid email";
          ?>
            <script>alert("Incorrect email")</script>
          <?php
        }
      }   

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ScholarWise Admin Login Page</title>
    
    
    <!-- CSS only -->
      
    <link
      rel="icon"
      type="image/x-icon"
      href="http://localhost/UP-2%20Source%20Code/Admin%20Dashboard/icons/user.png"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="http://localhost:7882/UP-2%20Source%20Code/Login%20Page/login_page.css"
    />
    <link
      href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
  </head>
  <body>

    <?php include 'landing_navbar.php' ?>

    <section class="vh-150" style="margin-top:40px">
      <div class="container py-3 h-50">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-15">
            <div class="card" style="height: 550px">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block d-flex">
                  <img
                    src="http://localhost:7882/UP-2%20Source%20Code/Login%20Page/back.jpg"
                    alt="login form"
                    class="img-fluid"
                    style="height: 90.2%"
                  />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
                    <form
                      action = "<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"
                      method="post"
                      class="form"
                      id="form"
                    >
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <span
                          class="h1 fw-bold mb-0 d-md-block"
                          style="text-align: start"
                          >SCHOLARWISE</span
                        >
                      </div>

                      <h5
                        class="fw-normal mb-3 pb-3 signin"
                        style="letter-spacing: 1px"
                      >
                        Sign into your admin account
                      </h5>

                      <div class="form-outline mb-2">
                        <label class="form-label" for="email"
                          >Email address</label
                        >
                        <input
                          type="email"
                          id="email"
                          name="email"
                          class="form-control form-control-lg"
                          required
                        />
                        <i class="fa fa-check-circle"></i>

                        <i class="fa fa-exclamation-circle"></i>

                        <small>Error message</small>
                      </div>

                      <div class="form-outline" style="margin-bottom: 10px">
                        <label class="form-label" for="password"
                          >Password</label
                        >
                        <input
                          type="password"
                          id="password"
                          name="pword"
                          class="form-control form-control-lg"
                          required
                        />
                        <i class="fa fa-check-circle"></i>

                        <i class="fa fa-exclamation-circle"></i>

                        <small>Error message</small>
                      </div>

                      <div class="pt-1 mb-4">
                        <button
                          class="btn btn-dark btn-lg btn-block"
                          type="submit"
                          
                        >
                          Login
                        </button>
                      </div>

                      <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                      <p class="mb-5 pb-lg-2" style="color: #393f81">
                        Forgot Password? Or don't have an account?
                        <br />
                        <a href="#!" style="color: #393f81"
                          >Contact the admin</a
                        >
                      </p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <!-- <script src="http://localhost/UP-2%20Source%20Code/Login%20Page/loginPageValidation.js"></script> -->
  </body>
</html>
