<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark py-1" style="font-family: 'Montserrat', sans-serif, Helvetica, 'Franklin Gothic Medium',
        'Arial Narrow', Arial; background-color:#453e6d">
    <!-- Left navbar links -->
    <div class="container" style="margin: 5px 80px">
      <ul class="navbar-nav">
        <?php if(isset($_SESSION['login_id'])): ?>
        <li class="nav-item ">
          <div class="d-flex position-relative">
            <a class="position-absolute" style="font-size: 2rem; font-weight: 700; top:-25px; color:#fc5404;">SCHOLARWISE</a>
          </div>
        </li>
      <?php endif; ?>
        
      </ul>

      <ul class="navbar-nav ml-auto" style="font-size:1.2rem">
       
      <?php if(isset($_GET['page']) && $_GET['page'] !='additional_info'): ?>
        <li class="nav-item">
          <a class="nav-link nav-home" href="./">
            <b>Home</b>
          </a>
        </li>
      <?php endif; ?>
          <li class="nav-item dropdown position-relative" style="left:180px">
            <a class="nav-link"  data-toggle="dropdown" aria-expanded="true" href="javascript:void(0)">
              <span>
                <div class="d-flex align-items-center p-1" style="border:50px">
                  <?php if(isset($_SESSION['login_profile_pic']) && !empty($_SESSION['login_profile_pic'])): ?>
                    <div class="rounded-circle mr-1" style="width: 25px;height: 25px;top:-5px;left: -40px">
                      <img src="assets/uploads/<?php echo $_SESSION['login_profile_pic'] ?>" class="image-fluid image-thumbnail rounded-circle" alt="" style="max-width: calc(100%);height: calc(100%);">
                    </div>
                  <?php else: ?>
                  <span class="fa fa-user mr-2" style="width: 25px;height: 25px;top:-5px;left: -40px"></span>
                  <?php endif; ?>
                  <span ><b><?php echo ucwords($_SESSION['login_firstname']) ?></b></span>
                  <span class="fa fa-angle-down ml-2"></span>
                </div>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
              
              <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
            </div>
          </li>
      </ul>
    </div>
  </nav>
  
  <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
      if($('.nav-link.nav-'+page).length > 0){
        $('.nav-link.nav-'+page).addClass('active')
          console.log($('.nav-link.nav-'+page).hasClass('tree-item'))
        if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
          $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

      }
    })
  </script>
