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

    <!-- Modal: Deleting Schedule -->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h2 class="card-header-title text-center" id="exampleModalCenterTitle">
                    Are you sure you want to delete these schedule. Clicking Ok deletes all the schedules.
                  </h2>

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

              <button class="btn btn-success">Ok</button>  <button class="ml-5 btn btn-danger">Cancel</button>

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
                <h1 class="header-title" style="color: #95a5b4;">
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
        <!-- <div class="row"> -->
          <div class="container">


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


              <?php 

              if (count(Auth::user()->schedules)) {
                  foreach(Auth::user()->schedules as $schedule) {

      echo "
            
            
            <div class='row align-items-center'>
                  <div class='col ml--2'>

                    <!-- Title -->
                    <h4 class='card-title mb-1'>
                      <i class='fe fe-plus' id='icons'></i>
                      <!-- <i class='fe fe-minus'></i> -->
                      <a class='collapsed' data-toggle='collapse' data-target='#collapseOne' style='cursor: pointer;'>". $schedule->day . ' | '.$schedule->max_no_students . ' students ' . "
                      </a>
                    </h4>
                    <div id='collapseOne' class='collapse' data-parent='#accordionExample'>
                      <div class='card-body'>
                        <p>
                          <ul class='appointment__table'>
                            <li>
                              Student's 1 name | Appointment time <br>
                              <button class='btn btn-success'>Accept</button> <button class='btn btn-danger'>Cancel</button>
                              <button class='btn btn-primary'>Message</button>
                            </li>
                            <li>
                              Student's 2 name | Appointment time <br>
                              <button class='btn btn-success'>Accept</button> <button class='btn btn-danger'>Cancel</button>
                              <button class='btn btn-primary'>Message</button>
                            </li>
                            <li>
                              Student's 3 name | Appointment time <br>
                              <button class='btn btn-success'>Accept</button> <button class='btn btn-danger'>Cancel</button>
                              <button class='btn btn-primary'>Message</button>
                            </li>
                            <li>
                              Student's 4 name | Appointment time <br>
                              <button class='btn btn-success'>Accept</button> <button class='btn btn-danger'>Cancel</button>
                              <button class='btn btn-primary'>Message</button>
                            </li>
                          </ul>
                        </p>
                      </div>
                    </div>

                    <!-- Time -->
                    <p class='card-text small text-muted'>
                      <time datetime='2018-05-24' class='update'>". $schedule->start_time  .' to '. $schedule->end_time . "</time>
                    </p>
                    
                  </div>
                  <div class='col-auto'>
                    
                    <!-- Dropdown -->
                    <i class='fe fe-trash-2' style='cursor: pointer;' data-toggle='modal' data-target='#modalDelete' data-toggle='tooltip' data-placement='top' title='Delete all Schedule'></i>
                    
                  </div>
                </div> <!-- / .row -->
                <!-- Divider -->
                <hr>
            ";



              }
              
              
              
              
              
              
              }else {

                echo "No Schedule has been set yet";
              }
              ?>



              </div> <!-- / .card-body -->
            </div> <!-- / .card -->           

          </div>
          
        <!-- </div> -->
      </div>

    </div> <!-- / .main-content -->




    