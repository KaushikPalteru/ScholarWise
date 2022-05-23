<div class="container">
      <div class="row">
        <div class="col-12 col-lg-3">
          <div class="card">
            <div class="card-body">
              
              <h5 class="my-3">My Drive</h5>
              <div class="fm-menu">
                <div class="list-group list-group-flush">
                  <a href="javascript:;" class="list-group-item py-1"
                    ><i class="bx bx-folder me-2"></i><span>All Files</span></a
                  >

                  <a href="javascript:;" class="list-group-item py-1"
                    ><i class="bx bx-file me-2"></i> <span>Documents</span></a
                  >
                  <a href="javascript:;" class="list-group-item py-1"
                    ><i class="bx bx-image me-2"></i><span>Images</span></a
                  >

                  <a href="javascript:;" class="list-group-item py-1"
                    ><i class="bx bx-beer me-2"></i><span>Zip Files</span></a
                  >
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-12 col-lg-9">
          <div class="card">
            <div class="card-body">
              <!-- <div class="fm-search">
                <div class="mb-0">
                  <div class="input-group input-group-lg">
                    <span class="input-group-text bg-transparent"
                      ><i class="fa fa-search"></i
                    ></span>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search the files"
                    />
                  </div>
                </div>
              </div> -->

              <!--end row-->
              <h5 class="pt-2 mt-2">Folders</h5>
              <div class="row mt-3">
                <div class="col-12 col-lg-4">
                  <div class="card shadow-none border radius-15">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="font-30 text-primary">
                            <a href="myfilemgr/soe_files.php"><i class="bx bxs-folder"></i></a>
                          
                        </div>
                        
                      </div>
                      <h6 class="mb-0 text-primary">SOE</h6>
                      <small>
                        <?php 
                        $query = mysqli_query($conn,"select * from upload");
                        $_SESSION['soe_records'] = mysqli_num_rows($query);
                        echo $_SESSION['soe_records']." files" 
                        ?>
                      </small>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="card shadow-none border radius-15">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="font-30 text-primary">
                            <a href="myfilemgr/som_files.php"><i class="bx bxs-folder"></i></a>
                          
                        </div>
                        
                      </div>
                      <h6 class="mb-0 text-primary">SOM</h6>
                      <small>
                      <?php 
                        $query1 = mysqli_query($conn,"select * from som_upload");
                        $_SESSION['som_records'] = mysqli_num_rows($query1);
                        echo $_SESSION['som_records']." files" 
                        ?>
                      </small>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="card shadow-none border radius-15">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="font-30 text-primary">
                            <a href="myfilemgr/sol_files.php"><i class="bx bxs-folder"></i></a>
                          
                        </div>
                       
                      </div>
                      <h6 class="mb-0 text-primary">SOL</h6>
                      <small>
                        <?php 
                          $query2 = mysqli_query($conn,"select * from sol_upload");
                          $_SESSION['sol_records'] = mysqli_num_rows($query2);
                          echo $_SESSION['sol_records']." files" 
                        ?>
                      </small>
                    </div>
                  </div>
                </div> 
              </div>
              <!--end row-->

              <div class="d-flex align-items-center">
                <div>
                  <h5 class="mb-0">Recent Files</h5>
                </div>
                <div class="ms-auto">
                  <a
                    href="javascript:;"
                    class="btn btn-sm btn-outline-secondary"
                    >View all</a
                  >
                </div>
              </div>
              <div class="table-responsive mt-3">
                <table class="table table-striped table-hover table-sm mb-0">
                  <thead>
                    <tr>
                      <th>Name <i class="bx bx-up-arrow-alt ms-2"></i></th>
                      <th>Members</th>
                      <th>Last Modified</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div>
                            <i
                              class="bx bxs-file-pdf me-2 font-24 text-danger"
                            ></i>
                          </div>
                          <div class="font-weight-bold text-danger">
                            Computer Networks Fundamentals
                          </div>
                        </div>
                      </td>
                      <td>Only you</td>
                      <td>May 5, 2022</td>
                      <td><i class="fa fa-ellipsis-h font-24"></i></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div>
                            <i
                              class="bx bxs-file me-2 font-24 text-primary"
                            ></i>
                          </div>
                          <div class="font-weight-bold text-primary">
                            Deadlock & its Problems
                          </div>
                        </div>
                      </td>
                      <td>3 members</td>
                      <td>May 2, 2022</td>
                      <td><i class="fa fa-ellipsis-h font-24"></i></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div>
                            <i
                              class="bx bxs-file me-2 font-24 text-primary"
                            ></i>
                          </div>
                          <div class="font-weight-bold text-primary">
                            Linked lists, Stacks and Queues
                          </div>
                        </div>
                      </td>
                      <td>10 members</td>
                      <td>Apr 30, 2022</td>
                      <td><i class="fa fa-ellipsis-h font-24"></i></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div>
                            <i
                              class="bx bxs-file-pdf me-2 font-24 text-danger"
                            ></i>
                          </div>
                          <div class="font-weight-bold text-danger">
                            GATE 2022 Paper Question Bank
                          </div>
                        </div>
                      </td>
                      <td>25 members</td>
                      <td>Apr 25, 2022</td>
                      <td><i class="fa fa-ellipsis-h font-24"></i></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div>
                            <i
                              class="bx bxs-file me-2 font-24 text-primary"
                            ></i>
                          </div>
                          <div class="font-weight-bold text-primary">
                            UP-2 Review-2 Report Template
                          </div>
                        </div>
                      </td>
                      <td>20 members</td>
                      <td>Apr 20, 2022</td>
                      <td><i class="fa fa-ellipsis-h font-24"></i></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div>
                            <i
                              class="bx bxs-file-doc me-2 font-24 text-success"
                            ></i>
                          </div>
                          <div class="font-weight-bold text-success">
                            Review-2 Checklist Template
                          </div>
                        </div>
                      </td>
                      <td>7 members</td>
                      <td>Apr 18, 2022</td>
                      <td><i class="fa fa-ellipsis-h font-24"></i></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div>
                            <i
                              class="bx bxs-file me-2 font-24 text-primary"
                            ></i>
                          </div>
                          <div class="font-weight-bold text-primary">
                            How to write a research paper
                          </div>
                        </div>
                      </td>
                      <td>40 members</td>
                      <td>Apr 15, 2022</td>
                      <td><i class="fa fa-ellipsis-h font-24"></i></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div>
                            <i
                              class="bx bxs-file me-2 font-24 text-primary"
                            ></i>
                          </div>
                          <div class="font-weight-bold text-primary">
                            Supply Chain Analytics
                          </div>
                        </div>
                      </td>
                      <td>50 members</td>
                      <td>Apr 10, 2022</td>
                      <td><i class="fa fa-ellipsis-h font-24"></i></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div>
                            <i
                              class="bx bxs-file-doc me-2 font-24 text-success"
                            ></i>
                          </div>
                          <div class="font-weight-bold text-success">
                            Constitution Law
                          </div>
                        </div>
                      </td>
                      <td>27 members</td>
                      <td>Apr 9, 2022</td>
                      <td><i class="fa fa-ellipsis-h font-24"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>