<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        return view('produk');
    }

    public function artikel()
    {
        return view('pages/users/customers/artikel');
    }

    public function event()
    {
        return view('pages/users/customers/event');
    }

    public function galery()
    {
        return view('pages/users/customers/galery_foto');
    }

    public function klien()
    {
        return view('pages/users/customers/reviews');
    }

    public function profile()
    {
        return view('pages/users/customers/profile');
    }

    public function visimisi()
    {
        return view('pages/users/customers/visimisi');
    }

    public function produk()
    {
        return view('pages/users/customers/produk');
    }

    public function kontak()
    {
        return view('pages/users/customers/kontak');
    }

    public function about()
    {
        return view('pages/users/customers/about');
    }

    public function detailProduk()
    {
        return view('pages/users/customers/detail_produk');
    }

    public function detailEvent()
    {
        return view('pages/users/customers/detail_event');
    }
}