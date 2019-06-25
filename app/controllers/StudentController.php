<?php 
class StudentController extends controller {

    public function bookAppointment (){
        $data = $_POST;
        $validate = new Validation ();
        $validate->requires($data, ['name', 'about', 'schedule_id', 'student_id'])->redirect();
        // Check if this Scheduled number of students have been filled
        $appointment = Appointment::create($data);
        $_SESSION['message'] = "Appointment has been booked successfuly";
        return redirect(back());
    }



    
}