<?php

class ProfileController extends controller {

    public function index(){
        return $this->view(
           'dashboard/profile'
        );
    }

}