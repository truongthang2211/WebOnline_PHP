<?php
Class Home extends Controller{
    public function __construct()
    {
    }
    public function index(){
        $this->View("home");

    }
}