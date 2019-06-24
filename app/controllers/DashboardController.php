<?php
class DashboardController extends Controller {
    

    public function __construct() {
        if (!Auth::user()) {
            return redirect(root(). "login");
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


}