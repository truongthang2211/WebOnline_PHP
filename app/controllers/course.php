<?php
Class Course extends Controller{
    public function __construct()
    {
    }
    public function index(){
        $this->View("course");

    }
}