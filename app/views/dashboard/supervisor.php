    <!-- Modal: SetSchedule -->
    <div class="modal fade" id="setSchedule" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                    Set Schedule
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
              <form action="<?php echo root(). 'supervisor/schedule'; ?>" method="post">

              <div class="form-group">
                  <label for="exampleInputMessge">Select a Day</label>
                  <select name="day" id="" class="form-control">
                    <option value="monday">Monday</option>
                    <option value="tuesday">Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>
                    <option value="friday">Friday</option>
                  </select>
                </div>

                <div class="form-group row">
                  <div class="col-6">
                  <label for="exampleInputMessge">Start Time</label>
                  <input type="time" class="form-control " name="start_time" id=""></div>

                  <div class="col-6">
                  <label for="exampleInputMessge">End Time</label>
                  <input type="time" class="form-control " name="end_time" id="">   </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputMessge">Number of Students</label>
                  <input type="number" class="form-control" name="max_no_students" id="">
                </div>



                

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

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
                <h3 class="header-pretitle">
                  SUPERVISOR DASHBAORD
                </h3>

                <!-- Title -->
                <h1 class="header-title">
                  welcome, <?php echo Auth::user()->fullname() ?>
                </h1>

              </div>
              <div class="col-auto">
                
                <!-- Button -->
                <button class="btn btn-primary" data-toggle="modal" data-target="#setSchedule">
                  Set Schedule
                </button>

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->
        </div>
      </div> <!-- / .header -->
      
      <!-- CARDS -->
      <div class="container-fluid">

      <div class="row justify-content-center">
      <div class="col-6">
      <?php include('message.php'); ?>
</div>
          </div>
        <div class="row">
          <div class="col-12 col-xl-6">


            <!-- Projects -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h4 class="card-header-title">
                        List of my Schedules
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Link -->
                    <a href="#!" class="small">View all</a>
                    
                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="card-body">


              <?php foreach(Auth::user()->schedules as $schedule) {
      echo "
            
            
            <div class='row align-items-center'>
                  <div class='col ml--2'>

                    <!-- Title -->
                    <h4 class='card-title mb-1'>
                      <a href='project-overview.html'>". $schedule->day . ' | '.$schedule->max_no_students . ' students ' . "</a>
                    </h4>

                    <!-- Time -->
                    <p class='card-text small text-muted'>
                      <time datetime='2018-05-24'>". $schedule->start_time  .' to '. $schedule->end_time . "</time>
                    </p>
                    
                  </div>
                  <div class='col-auto'>
                    
                    <!-- Dropdown -->
                    <div class='dropdown'>
                      <a href='#!' class='dropdown-ellipses dropdown-toggle' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' data-boundary='window'>
                        <i class='fe fe-more-vertical'></i>
                      </a>
                      <div class='dropdown-menu dropdown-menu-right'>
                        <a href='#!' class='dropdown-item'>
                          Action
                        </a>
                        <a href='#!' class='dropdown-item'>
                          Another action
                        </a>
                        <a href='#!' class='dropdown-item'>
                          Something else here
                        </a>
                      </div>
                    </div>
                    
                  </div>
                </div> <!-- / .row -->
                <!-- Divider -->
                <hr>
            ";



              }
              
              
              
              
              
              
              
              
              ?>



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
                    <img src="<?php echo root() . 'images/illustrations/happiness.svg' ?>" alt="..." class="img-fluid mt--5 mb-4"
                      style="max-width: 272px;">
            
                    <!-- Title -->
                    <h2 class="mb-2">
                      <?php  echo Auth::user() ?>
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




    