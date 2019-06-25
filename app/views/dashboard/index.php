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

    <!-- MODALS
    ================================================== -->
    
 

    <!-- Modal: Book Appointment -->
    <div class="modal fade" id="modalBookAppointment" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                    Book an appointment
                  </h4>
              
                </div>
                <div class="col-auto">

                  <!-- Close -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              
                </div>
              </div> <!-- / .row -->
            </div>
            <div class="card-header">
          
              <!-- Form -->
              <form>
                <div class="form-group">
                  <label for="exampleInputMessge">Enter a Reason for your appointment</label>
                  <textarea class="form-control" id="exampleInput" name="exampleInputMessage" cols="10" rows="5" required></textarea>
                </div>

                

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Deposit -->
    <div class="modal fade" id="modalDeposit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
  
                    <!-- Title -->
                    <h4 class="card-header-title" id="exampleModalCenterTitle">
                      Deposit Cash
                    </h4>
                
                  </div>
                  <div class="col-auto">
  
                    <!-- Close -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                
                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="card-header">
            
                <!-- Form -->
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Amount</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Amount">
                  </div>
  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Something</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Something">
                  </div>
  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
  
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Modal: Search -->
    <div class="modal fade" id="sidebarModalSearch" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
          <div class="modal-body" data-toggle="lists" data-lists-values='["name"]'>
     
            <!-- Form -->
            <form class="mb-4">
              <div class="input-group input-group-merge">
                <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </div>
            </form>

            <!-- List group -->
            <div class="my--3">
              <div class="list-group list-group-flush list">
                <a href="team-overview.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="../assets/images/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Airbnb
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->
                </a>
                <a href="team-overview.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="../assets/images/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Medium Corporation
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->
                </a>
                <a href="project-overview.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img src="../assets/images/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Homepage Redesign
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->

                </a>
                <a href="project-overview.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img src="../assets/images/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Travels & Time
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->

                </a>
                <a href="project-overview.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img src="../assets/images/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Safari Exploration
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->
            
                </a>
                <a href="profile-posts.html" class="list-group-item px-0">
            
                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="../assets/images/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>

                    </div>
                    <div class="col ml--2">
                  
                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Dianna Smiley
                      </h4>

                      <!-- Status -->
                      <p class="text-body small mb-0">
                        <span class="text-success">●</span> Online
                      </p>

                    </div>
                  </div> <!-- / .row -->

                </a>
                <a href="profile-posts.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="../assets/images/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>

                    </div>
                    <div class="col ml--2">
                  
                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Ab Hadley
                      </h4>

                      <!-- Status -->
                      <p class="text-body small mb-0">
                        <span class="text-danger">●</span> Offline
                      </p>

                    </div>
                  </div> <!-- / .row -->
            
                </a>
              </div>
            </div>
      
          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Activity -->
    <div class="modal fade" id="sidebarModalActivity" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <!-- Title -->
            <h4 class="modal-title">
              Notifications
            </h4>

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                &times;
              </span>
            </button>
        
          </div>
          <div class="modal-body">

            <!-- List group -->
            <div class="list-group list-group-flush my--3">
              <a class="list-group-item px-0" href="#!">
          
                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../assets/images/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">
                
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>
                
                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../assets/images/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">
                
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>
                
                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../assets/images/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">
                
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Adolfo Hess</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>
                
                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../assets/images/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">
                
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>
                
                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../assets/images/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">
                
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Miyah Myles</strong> shared your post with <strong class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen Rouse</strong>, and <strong class="text-body">3 others</strong>.
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>
                
                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../assets/images/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">
                
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>
                
                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../assets/images/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">
                
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Glen Rouse</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>
                
                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../assets/images/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">
                
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Grace Gross</strong> subscribed to you.
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>
                
                  </div>
                </div> <!-- / .row -->

              </a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- NAVIGATION
    ================================================== -->
    
      <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
        <div class="container-fluid">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="index-2.html">
            <img src="../assets/images/logo.svg" class="navbar-brand-img 
            mx-auto" alt="...">
          </a>

          <!-- User (xs) -->
          <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">
        
              <!-- Toggle -->
              <a href="#!" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="../assets/images/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                <a href="profile-posts.html" class="dropdown-item">Profile</a>
                <a href="settings.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="sign-in.html" class="dropdown-item">Logout</a>
              </div>

            </div>

          </div>

          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <div class="input-group input-group-rounded input-group-merge">
                <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </div>
            </form>
      
            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="dashboard-alt.html">
                  <i class="fe fe-home"></i> Dashboards
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile-files.html">
                  <i class="fe fe-user"></i> Profile
                </a>
              </li>
              <li class="nav-item d-md-none">
                <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                 <span class="fe fe-bell"></span> Notifications
                </a>
              </li>
            </ul>

            
      
            <!-- Push content down -->
            <div class="mt-auto"></div>

            
            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">
        
              <!-- Icon -->
              <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
                <span class="icon">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Dropup -->
              <div class="dropup">
          
                <!-- Toggle -->
                <a href="#!" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-sm avatar-online">
                    <img src="../assets/images/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                  </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                  <a href="profile-posts.html" class="dropdown-item">Profile</a>
                  <a href="settings.html" class="dropdown-item">Settings</a>
                  <hr class="dropdown-divider">
                  <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>

              </div>

              <!-- Icon -->
              <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
                <span class="icon">
                  <i class="fe fe-search"></i>
                </span>
              </a>

            </div>
            

          </div> <!-- / .navbar-collapse -->

        </div>
      </nav>
    

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>

  </body>

<!-- Mirrored from dashkit.goodthemes.co/dashboard-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jan 2019 10:18:05 GMT -->
</html>