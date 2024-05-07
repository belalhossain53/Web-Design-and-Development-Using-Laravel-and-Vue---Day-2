<?php

namespace App\classes;

class WelcomeMsg
{
    public $message;
    public $courseName;

    public function __construct()
    {
        $this->message = "Welcome to Web Design and Development Using Laravel and Vue.";
        $this->courseName = "Web Design and Development Using Laravel and Vue.";
    }

    public function index()
    {
        echo $this->message."<br/>";
        echo $this->courseName;
    }

}