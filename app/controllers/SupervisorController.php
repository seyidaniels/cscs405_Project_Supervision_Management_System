<?php 

class SupervisorController extends Controller {

    public function __construct() {
        if (Auth::userType() != 'supervisor') {
            return redirect()->back();
        }
    }

    public function schedule() {
        $data = $_POST;
        $validate = new Validation ();
        $validate->requires($data, ['day', 'start_time', 'end_time', 'max_no_students'])
                    ->valid_time_range($data['start_time'], $data['end_time'])
                    ->redirect();
        $data['supervisor_id'] = Auth::user()->id;
        $schedule = Schedule::create($data);
        $_SESSION['message'] = "You created a scheule to be available on ".$schedule->day . 
        "s". " from the period of ". $schedule->start_time . " to ". $schedule->end_time. 
        "<br> Max number of students is ".$schedule->max_no_students;
        return redirect(back());
    }

    // public function appointments() {

    //     $appointments = Appointment::all();

    //     return $this->view('')

    // }

    public function viewAppointment () {

    }


    public function acceptAppointment() {
        
    }



    public function cancelAppointment() {

    }

    public function sendMessage () {

    }


}