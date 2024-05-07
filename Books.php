<?php

namespace App\classes;

class Books
{
    public $bookName;
    public $bookPrice;

    public function __construct()
    {
        $this->bookName = "PHP Manual in Bangla";
        $this->bookPrice = 300;
    }

    public function index()
    {
        echo $this->bookName."</br>";
        echo $this->bookPrice;
    }

}