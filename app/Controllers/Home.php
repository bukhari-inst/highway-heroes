<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/index');
    }

    public function customers()
    {
        return view('pages/users/customers');
    }
}