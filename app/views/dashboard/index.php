<!doctype html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="<?php echo root() .'fonts/feather/feather.min.css' ?>">

    <!-- Theme CSS -->
      
    <link rel="stylesheet" href="<?php echo root() .'css/theme.min.css" id="stylesheetLight' ?>">
    

    

    <title>Dashkit</title>
  </head>
  <body>

      <?php include('includes/navbar.php')  ?>


      <?php

      if (Auth::usertype() == 'supervisor') {
        require('supervisor.php');
      }else {
        require('student.php');
      }

      ?>
    

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">

      <!-- HEADER -->
      <div class="header">
        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col">
                
                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Overview
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  Dashboard
                </h1>

              </div>
              <div class="col-auto">
                
                <!-- Button -->
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalBookAppointment">
                  Book Appointment
                </button>

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div> <!-- / .header -->
      
      <!-- CARDS -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-xl-6">

            <!-- Projects -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h4 class="card-header-title">
                      Appointment Summary
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Link -->
                    <a href="#!" class="small">View all</a>
                    
                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="card-body">

                <div class="row align-items-center">
                  <div class="col ml--2">

                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <i class="fe fe-plus" id="icons"></i>
                      <!-- <i class="fe fe-minus"></i> -->
                      <a class="collapsed" data-toggle="collapse" data-target="#collapseOne" style="cursor: pointer;">Homepage
                        Redesign</a>
                    </h4>
                    <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>
                          <ul class="appointment__table">
                            <li>
                              Student's 1 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                            <li>
                              Student's 2 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                            <li>
                              Student's 3 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                            <li>
                              Student's 4 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                          </ul>
                        </p>
                      </div>
                    </div>
                    <!-- Time -->
                    <p class="card-text small text-muted">
                      <time datetime="2018-05-24" class="update">Updated 5hr ago</time>
                    </p>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>
                    
                  </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col ml--2">

                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <i class="fe fe-plus" id="icons"></i>
                      <!-- <i class="fe fe-minus"></i> -->
                      <a class="collapsed" data-toggle="collapse" data-target="#collapseOne" style="cursor: pointer;">Homepage
                        Redesign</a>
                    </h4>
                    <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>
                          <ul class="appointment__table">
                            <li>
                              Student's 1 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                            <li>
                              Student's 2 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                            <li>
                              Student's 3 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                            <li>
                              Student's 4 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                          </ul>
                        </p>
                      </div>
                    </div>
                    <!-- Time -->
                    <p class="card-text small text-muted">
                      <time datetime="2018-05-24" class="update">Updated 5hr ago</time>
                    </p>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>
                    
                  </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col ml--2">

                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <i class="fe fe-plus" id="icons"></i>
                      <!-- <i class="fe fe-minus"></i> -->
                      <a class="collapsed" data-toggle="collapse" data-target="#collapseOne" style="cursor: pointer;">Homepage
                        Redesign</a>
                    </h4>
                    <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>
                          <ul class="appointment__table">
                            <li>
                              Student's 1 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                            <li>
                              Student's 2 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                            <li>
                              Student's 3 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                            <li>
                              Student's 4 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                          </ul>
                        </p>
                      </div>
                    </div>
                    <!-- Time -->
                    <p class="card-text small text-muted">
                      <time datetime="2018-05-24" class="update">Updated 5hr ago</time>
                    </p>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>
                    
                  </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col ml--2">

                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <i class="fe fe-plus" id="icons"></i>
                      <!-- <i class="fe fe-minus"></i> -->
                      <a class="collapsed" data-toggle="collapse" data-target="#collapseOne" style="cursor: pointer;">Homepage
                        Redesign</a>
                    </h4>
                    <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>
                          <ul class="appointment__table">
                            <li>
                              Student's 1 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                            <li>
                              Student's 2 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                            <li>
                              Student's 3 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                            <li>
                              Student's 4 name | Appointment time <br>
                              <button class="btn btn-success">Accept</button> <button class="btn btn-danger">Cancel</button>
                              <button class="btn btn-primary">Message</button>
                            </li>
                          </ul>
                        </p>
                      </div>
                    </div>
                    <!-- Time -->
                    <p class="card-text small text-muted">
                      <time datetime="2018-05-24" class="update">Updated 5hr ago</time>
                    </p>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>
                    
                  </div>
                </div> <!-- / .row -->

              </div> <!-- / .card-body -->
            </div> <!-- / .card -->           

          </div>
          <div class="col-12 col-xl-6">
            
            <!-- Card -->
            <div class="card">
              <div class="card-body text-center">
                <div class="row justify-content-center">
                  <div class="col-12 col-xl-10">
            
                    <!-- Image -->
                    <img src="../assets/images/illustrations/happiness.svg" alt="..." class="img-fluid mt--5 mb-4"
                      style="max-width: 272px;">
            
                    <!-- Title -->
                    <h2 class="mb-2">
                      We released 2008 new versions of our theme for glory.
                    </h2>
            
                    <!-- Content -->
                    <p class="text-muted">
                      This is a true story and totally not made up. This is going to be better in the long run but for now this is
                      the way it is.
                    </p>
            
                    <!-- Button -->
                    <a href="#!" class="btn btn-primary">
                      Try it for free
                    </a>
            
                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
        </div>
      </div>

    </div> <!-- / .main-content -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Theme JS -->
    <script src="<?php root().'assets/js/theme.min.js' ?>"></script>
    

  </body>
</html>