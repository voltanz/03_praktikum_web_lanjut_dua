<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile')
            ->with('full_name', 'Ahmad Bima Tristan Ibrahim')
            ->with('short_name', 'Bima')
            ->with('nim', '2141720077')
            ->with('absen', '03')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('kampus', 'Politeknik Negeri Malang')
            ->with('email', 'bimatristan.me@gmail.com')
            ->with('nohp', '085156552045')
            ->with('ig', '@bima_tristan');
    }
}
