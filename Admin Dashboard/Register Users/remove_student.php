<?php 

session_start();

  include 'config.php';

  if(!isset($_SESSION['name'])) {
    echo "You are logged out!";
    header('location:admin_login_page.php');
    
  }

  if(isset($_POST['button'])) {
    $id = $_POST['idNum'];

    $check_id = " select * from students where id = '$id' ";
    $query = mysqli_query($con, $check_id);
    $id_count = mysqli_num_rows($query);

    if($id_count === 1) {
      echo $id;
			$user_data = mysqli_fetch_assoc($query);

      $_SESSION['stud_email'] = $user_data['email'];
      $_SESSION['stud_fname'] = $user_data['fullname'];
      $_SESSION['stud_name'] = strtok($_SESSION['stud_fname']," ");
      $_SESSION['stud_idNum'] = $user_data['id'];
      $_SESSION['stud_school'] = $user_data['school'];
      $_SESSION['stud_sem'] = $user_data['sem'];
      $_SESSION['stud_section'] = $user_data['section'];
      $_SESSION['stud_contactnum'] = $user_data['contact'];
      $_SESSION['stud_branch'] = substr($_SESSION['stud_section'],0,3);
      $_SESSION['stud_linkedin'] = $user_data['linkedin'];
      $_SESSION['stud_github'] = $user_data['github'];

      header('Location:student_profile_delete.php');

    }

    else {
      ?>
        <script>alert("You've entered a wrong ID. Please try again!")</script>
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
    <title>Remove Student</title>
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
                <h6 class="mt-3 mb-2 text-primary" style="font-size: 1.3rem">
                  UNIVERSITY DETAILS
                </h6>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                  <label for="idnum">Student ID Number</label>
                  <input
                    type="name"
                    class="form-control mb-3"
                    id="idnum"
                    name = "idNum"
                    placeholder="Enter ID Number"
                  />
                </div>
              </div>
            </div>
            <div class="row gutters">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="text-right" id="button_group">
                  <br />
                  <button
                    type="button"
                    id="submit"
                    name="cancel"
                    class="btn btn-secondary"
                  >
                    Cancel
                  </button>
                  <button
                    type="submit"
                    id="togglebtn"
                    class="btn btn-primary"
                    name = "button"
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
