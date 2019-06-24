<?php

class App
{
    protected $controller = "HomeController";

    protected $method = "index";

    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();
        // Check if the Controller exists
        $intendingController =  ($url == null ) ? $this->controller : ucfirst($url[0]) . "Controller";
        if (file_exists('../app/controllers/' . $intendingController . ".php")) {
            $this->controller = $intendingController;
            unset($url[0]);
            require_once('../app/controllers/' . $this->controller . ".php");
        $this->controller = new $this->controller;


        if (!empty($url)) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
        }else {
                    error_404("errror");
        }


    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}