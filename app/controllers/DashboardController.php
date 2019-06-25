<?php
class DashboardController extends Controller {
    

    public function __construct() {
        if (!Auth::user()) {
            return redirect(root(). "home/login");
        }
    }
    public function index() {
        $data['seyi'] = "seyidaniels";
        return $this->view('dashboard/index');
    }

    public function profile() {
        $data['seyi'] = "seyidaniels";
        return $this->view('dashboard/profile');
    }

    public function logout () {
        $_SESSION = array();
        $_SESSION['message'] = "You are now logged out";        
        return redirect(root(). "home/login");
    }


}