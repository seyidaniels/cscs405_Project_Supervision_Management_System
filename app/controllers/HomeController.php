<?php


class HomeController extends Controller

{
    public function index($name = '')
    {
        return $this->view('home/index');
    }

    public function register() {
        return $this->view('home/register');
    }

    public function login (){
        return $this->view('home/login');
    }
}