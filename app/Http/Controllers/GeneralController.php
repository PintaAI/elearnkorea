<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function kelas()
    {
        return view('kelas');
    }

    public function detailkelas()
    {
        return view('detailkelas');
    }

    public function detailzoom()
    {
        return view('detailzoom');
    }

    public function detailcourse()
    {
        return view('student.detailcourse');
    }

    public function invoice()
    {
        return view('student.invoice');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
