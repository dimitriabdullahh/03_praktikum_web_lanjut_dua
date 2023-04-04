<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile')
            ->with('full_name', 'Dimitri Abdullah')
            ->with('short_name', 'Dimitri Abdullah')
            ->with('nim', '2141720249')
            ->with('absen', '09')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('kampus', 'Politeknik Negeri Malang')
            ->with('email', '2141720249@student.polinema.ac.id')
            ->with('nohp', '08888090576')
            ->with('ig', '@dimitriabdullahh');
    }
}
