<?php 

use Carbon\Carbon;

class StudentController extends controller {

    public function bookAppointment (){
        $data = $_POST;
        $validation = new Validation ();
        $validation->requires($data, ['name', 'about', 'schedule_id', 'student_id'])->redirect();
        // Check if this Scheduled number of students have been filled
        $appointment = Appointment::create($data);
        $_SESSION['message'] = "Appointment has been booked successfuly";
        return redirect(back());
    }


    public function sendMessage () {
        $data = $_POST;

        $validation = new Validation () ;
        $validation->requires($data, [
            'text', 'appointment_id'
        ])->redirect();
        $message = Message::create($data);
        $_SESSION['message'] = "Message sent";
        return redirect(back());

    }

    public function cancelAppointment() {
        $data = explode('/', $_GET['url']);
         settype($data[2], 'integer');
         $appointment_id = $data[2];
        $appointment = Appointment::find($appointment_id);
        if ($appointment != null) {
            // Checks if Appointment is less than 10 hours
            if ($this->lessThanTenHours($appointment)) {
                $appointment->delete();
                $_SESSION['message'] = "Appointment has been cancelled";
                return redirect(back());
            }

            $_SESSION['error'] = "Appointment is longer than 10 hours, Cant be deleted";
            return redirect(back());

        }

        $_SESSION['error'] = "Appointment not found";
        return redirect(back());       
    }


    protected function lessThanTenHours (Appointment $appointment) {
        $appointmentTime = Carbon::parse($appointment->created_at);
        $hoursDifference = $appointmentTime->diffInHours(Carbon::now());
        if ($hoursDifference > 10) {
            return false;
        }
        return true;
    }



    
}