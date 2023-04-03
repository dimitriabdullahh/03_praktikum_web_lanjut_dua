<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard')
            ->with('full_name', "Wildan Hafidz, Dimitri Abdullah")
            ->with('alert', "Welcome!");
    }
}