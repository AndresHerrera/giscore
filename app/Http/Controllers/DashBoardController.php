<?php

namespace GisCore\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function indexOption($option)
    {
        return view('dashboard',['option' => $option]);
    }
}
