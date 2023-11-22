<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function dashboard()
    {
        return view('home/dashboard');
    }
}
