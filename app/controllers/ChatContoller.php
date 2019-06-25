<?php

class ChatController extends controller {

    public function index(){
        return $this->view(
           'dashboard/chat'
        );
    }

}