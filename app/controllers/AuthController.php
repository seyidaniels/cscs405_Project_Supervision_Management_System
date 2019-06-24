<?php
class AuthController extends Controller {
    public function login (){
        $data  = $_POST;
        $this->validates($data, ['email', 'password', 'type']);
        $auth = Auth::login($data);
        return $auth == true ? redirect(root()."dashboard") : redirect(back());
    }

    public function register () {
        $data = $_POST;
        $this->validates($data, ['type', 'firstname', 'lastname', 'phone', 'email', 'password', 'password_confirmation']);
        $validate = new Validation ();
        $validate->uniformPasswords($data['password'], $data['password_confirmation'])->redirect();
        $type = $data['type'];
        try {
            $signup = $type == 'supervisor' ? $this->registersSupervisor($data) : $this->registersStudent($data);
        }catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
            $_SESSION['message'] = 'You have been registered as a '.$data['type'].'. Kindly log in to continue';   
            return redirect(back());
    }

    public function registersSupervisor($data) {
        $this->validates($data, ['staff_id', 'title']);
        $validate = new Validation ();
        require_once('../app/models/Supervisor.php');
        $supervisor = new Supervisor;
        $validate->is_unique($data['email'], 'email', $supervisor)->redirect();
        $validate->is_unique($data['phone'], 'phone', $supervisor)->redirect();
        $validate->is_unique($data['staff_id'], 'staff_id', $supervisor)->redirect();
        Supervisor::create($data);
    }

    public function registersStudent ($data) {
        $this->validates($data, [
            'matric_number'
        ]);
        $supervisor = Supervisor::orderByRaw('RAND()')->take(1)->first()->id;
        return $supervisor ?: Student::create($data);
    }

    protected function passwordsMatch($password, $password_confirmation) {
        if ($password !== $password_confirmation) {
            session_set(['validation_errors' => ['The Passwords do not match']]);
            return redirect(back());
            die();
        }
    }
}