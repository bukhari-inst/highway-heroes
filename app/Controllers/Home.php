<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing_page');
    }

    public function customers()
    {
        return view('pages/users/customers');
    }
}