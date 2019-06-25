
 

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
              <form action="<?php echo root(). 'student/bookAppointment'; ?>" method = "post">
              <div class="form-group">
                  <label for="exampleInputMessge">Appointment Title</label>
                  <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="schedule_id">Select Supervisor's Schedule</label>
                  <select name="schedule_id" class="form-control" id="schedule_id">
                    <?php 
                        foreach(Auth::user()->supervisor->schedules as $schedule) {

                            echo "<option value=
                            ". $schedule->id . ">";
                            echo $schedule->print()."
                            </option>";
                        }
                    ?>
                  </select>
                </div>



                <div class="form-group">
                  <label for="exampleInputMessge">Enter a Reason for your appointment</label>
                  <textarea class="form-control" id="exampleInput" name="about" cols="10" rows="5" required></textarea>
                </div>

                <input type="hidden" name="student_id" value="<?php echo Auth::user()->id ?>" >


                

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Modal: Book Appointment -->
    <div class="modal fade" id="messageSupervisor" tabindex="-1" role="dialog" aria-hidden="true">
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
              <form action="<?php echo root(). 'student/bookAppointment'; ?>" method = "post">
              <div class="form-group">
                  <label for="exampleInputMessge">Appointment Title</label>
                  <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="schedule_id">Select Supervisor's Schedule</label>
                  <select name="schedule_id" class="form-control" id="schedule_id">
                    <?php 
                        foreach(Auth::user()->supervisor->schedules as $schedule) {

                            echo "<option value=
                            ". $schedule->id . ">";
                            echo $schedule->print()."
                            </option>";
                        }
                    ?>
                  </select>
                </div>



                <div class="form-group">
                  <label for="exampleInputMessge">Enter a Reason for your appointment</label>
                  <textarea class="form-control" id="exampleInput" name="about" cols="10" rows="5" required></textarea>
                </div>

                <input type="hidden" name="student_id" value="<?php echo Auth::user()->id ?>" >


                

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
                  STUDENT DASHBOARD
                </h3>

                <!-- Title -->
                <h1 class="header-title">
                  <?php echo Auth::user()->fullname() ?>
                </h1>

              </div>
              <div class="col-auto">
                
                <!-- Button -->
                <button class="btn btn-primary" data-toggle="modal" data-target="#messageSupervisor">
                  Book Appointment
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
                     My Appointments
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Link -->
                    <a href="#!" class="small">View all</a>
                    
                  </div>
                </div> <!-- / .row -->
              </div><div class='card-body'>
              <?php 

              foreach(Auth::user()->appointments as $appointment){
                // dd($appointment->created_at);
                echo "              

                <div class='row align-items-center'>
                  <div class='col ml--2'>

                    <!-- Title -->
                    <h4 class='card-title mb-1'>
                      <a href='project-overview.html'>".$appointment->name."</a>
                    </h4>

                    <!-- Time -->
                    <p class='card-text small text-muted'>
                      <time datetime='2018-05-24'>Updated 5hr ago</time>
                    </p>
                    
                  </div>
                  <div class='col-auto'>
                    
                    <!-- Dropdown -->
                    <div class='dropdown'>
                      <a href='#!' class='dropdown-ellipses dropdown-toggle' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' data-boundary='window'>
                        <i class='fe fe-more-vertical'></i>
                      </a>
                      <div class='dropdown-menu dropdown-menu-right'>
                        
                        <a href='#!' class='dropdown-item' data-toggle='modal' data-target='#messageSupervisor' >
                          Message Supervisor
                        </a>
                        <a href='#!' class='dropdown-item'>
                          Cancel Appointment
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

</div>

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
                      <?php   ?>
                    </h2>
            
                    <!-- Content -->
                    <p class="text-muted">
                      Supervisor Name: <?php echo Auth::user()->supervisor->fullname() ?>
                    </p>
            
                    <!-- Button -->
                    <a href="#!" class="btn btn-primary">
                      Message
                    </a>
            
                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
        </div>
      </div>

    </div> <!-- / .main-content -->