<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view('admin');
    }
    function petugas()
    {
        return view('petugas');
    }
    function admin()
    {
        return view('admin');
    }

}
