<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('User.index');
    }
    public function about()
    {
        return view('User.about');
    }
    public function services()
    {
        return view('User.services');
    }
    public function work()
    {
        return view('User.work');
    }
    public function contact()
    {
        return view('User.contact');
    }
}
