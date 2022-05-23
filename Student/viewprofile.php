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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <?php include 'student links/student_links.php' ?>
    <link
      href="viewprofile.css"
      rel="stylesheet"
    />
    
</head>
<body class="pt-0 mt-0">

    <?php include 'student_navbar.php' ?>

    <div class="container">
        <div class="main-body">
        
        
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="http://localhost:7882/UP-2%20Source%20Code/Admin%20Dashboard/icons/user1.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4><?php echo $_SESSION['fname']; ?></h4>
                          <?php echo "Sem ".$_SESSION['sem']." ".$_SESSION['branch']." student"; ?>             
                          <p class="text-secondary mb-1"></p>
                          <p class="text-muted font-size-sm">Presidency University, Bangalore</p>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>LinkedIn</h6>
                        <span class="text-secondary"><?php echo $_SESSION['linkedin']; ?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                        <span class="text-secondary"><?php echo $_SESSION['github']; ?></span>
                      </li>
                      
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $_SESSION['fname']; ?>
                        </div>
                      </div>
                      <hr>
                      
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">ID</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $_SESSION['idNum']; ?>
                        </div>
                      </div>
                      <hr>
                       <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">School</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $_SESSION['school']; ?>          
                        </div>
                      </div>
                      <hr>
                       <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Semester</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $_SESSION['sem']; ?>             
                        </div>
                      </div>
                      <hr>
                       <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Branch</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $_SESSION['branch']; ?>                            
                        </div>
                      </div>
                      <hr>
                       <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Section</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $_SESSION['sem'].$_SESSION['section']; ?>             
                          
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $_SESSION['s_email']; ?>             
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Contact Number</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $_SESSION['contactnum']; ?>             
                          
                        </div>
                      </div>
                      
                      <hr>
                      
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                        </div>
                      </div>
                    </div>
                  </div>
    
                 
                    </div>
                  </div>
    
    
    
                </div>
              </div>
    
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>