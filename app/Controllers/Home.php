<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home/index');
    }
    public function cb(): string
    {
        return view('layout/button');
    }
    public function about(): string
    {
        return view('home/about');
    }
}
