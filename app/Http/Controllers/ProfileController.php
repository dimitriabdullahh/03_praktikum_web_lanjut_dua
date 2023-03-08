<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile')
            ->with('full_name', 'Wildan Hafidz Mauludin')
            ->with('short_name', 'Wildan')
            ->with('nim', '2141720007')
            ->with('absen', '24')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('kampus', 'Politeknik Negeri Malang')
            ->with('email', '2141720007@student.polinema.ac.id')
            ->with('nohp', '081386964470')
            ->with('ig', '@maxtansy');
    }
}
