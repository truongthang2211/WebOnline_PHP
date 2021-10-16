<?php
Class User extends Controller{
    public function index(){
        $this->View("profile");
    }
    public function myinfo(){
        $this->View("myinfo");
    }
}