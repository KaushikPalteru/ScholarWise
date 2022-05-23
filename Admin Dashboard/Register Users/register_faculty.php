<?php
session_start();
  
  if(!isset($_SESSION['name'])) {
    echo "You are logged out!";
    header('location:admin_login_page.php');
  
  }
  include 'config.php';

    	if($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['pword']);
        $fname = mysqli_real_escape_string($con,$_POST['fname']);
        $contact = mysqli_real_escape_string($con,$_POST['contactnum']);
        $id = mysqli_real_escape_string($con,$_POST['idNum']);
        $cc =mysqli_real_escape_string($con,$_POST['cc']);
        $dept = mysqli_real_escape_string($con,$_POST['dept']);
        $school = mysqli_real_escape_string($con,$_POST['school']);

        $pass = password_hash($password, PASSWORD_BCRYPT);

        $email_id = " select * from students where email = '$email' ";
        $query = mysqli_query($con, $email_id);
        $email_count = mysqli_num_rows($query);

        if($email_count>0) {
					// echo "email already exists";
          ?>
            <script>alert("Email already exists")</script>
          <?php
        }

        else {
          // echo "Invalid email";
          $insertquery = "insert into faculty(email, password, fullname, contact, id, cc, department, school) VALUES ('$email','$pass','$fname','$contact','$id','$cc','$dept','$school')";
          
          $iquery = mysqli_query($con, $insertquery);

          if($iquery)
          {
            ?>
              <script>alert("Inserted data successfully")</script>
            <?php
	        }

          else {
            ?>
              <script>alert("Insertion unsuccessful")</script>
            <?php
	        }
        }
      }   

?>

 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Faculty</title>
    <?php include 'register links/registerlinks.php' ?>
  </head>
  <body
    class="pt-0"
    style="
      font-family: 'Montserrat', sans-serif, Helvetica, 'Franklin Gothic Medium',
        'Arial Narrow', Arial;
    "
  >
    <?php include 'admin_navbar.php' ?>

    <div
      class="container d-flex justify-content-center align-items-center mt-4"
    >
      <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
          <form class="card-body form" action = "<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="form">
            <div class="row gutters">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <br />
                <h6 class="mb-2 text-primary" style="font-size: 1.3rem">
                  FACULTY DETAILS
                </h6>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                  <label for="eMail">Email</label>
                  <input
                    type="email"
                    class="form-control mb-3"
                    name="email"
                    id="eMail"
                    placeholder="Enter email ID"
                    required
                  />
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                  <label for="password">Password</label>
                  <input
                    type="password"
                    class="form-control mb-3"
                    name="pword"
                    id="password"
                    placeholder="Enter password"
                    required
                  />
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                  <label for="fullName">Full Name</label>
                  <input
                    type="text"
                    class="form-control mb-3 mb-lg-4"
                    name="fname"
                    id="fullName"
                    placeholder="Enter full name"
                    required
                  />
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                  <label for="phone">Contact Number</label>
                  <input
                    type="text"
                    class="form-control mb-3 mb-lg-4"
                    name="contactnum"
                    id="phone"
                    placeholder="Enter Contact Number"
                    required
                  />
                </div>
              </div>
            </div>
            <div class="row gutters">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h6 class="mt-3 mb-2 text-primary" style="font-size: 1.3rem">
                  UNIVERSITY DETAILS
                </h6>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                  <label for="idnum">ID Number</label>
                  <input
                    type="name"
                    class="form-control mb-3"
                    name="idNum"
                    id="idnum"
                    placeholder="Enter ID Number"
                    required
                  />
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                  <label for="section">CC</label>
                  <input
                    type="text"
                    class="form-control mb-3"
                    name="cc"
                    id="cc"
                    placeholder="Enter Section"
                    required
                  />
                </div>
              </div>
              
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                  <label for="semester">Department</label>
                  <input
                    type="text"
                    class="form-control mb-3"
                    name="dept"
                    id="dept"
                    placeholder="Enter Department"
                    required
                  />
                </div>
              </div>
              
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                  <label for="school">School</label>
                  <input
                    type="name"
                    class="form-control mb-3"
                    name="school"
                    id="school"
                    placeholder="Enter School"
                    required
                  />
                </div>
              </div>

            </div>
            <div class="row gutters">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="text-right">
                  <br />
                  <button
                    type="submit"
                    id="submit"
                    class="btn btn-secondary"
                  >
                    Cancel
                  </button>
                  <button
                    type="submit"
                    id="submit"
                    class="btn btn-primary"
                  >
                    Submit
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
