<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile')
            ->with('full_name', 'Abdullah Azzam')
            ->with('short_name', 'Azzam')
            ->with('nim', '2141720073')
            ->with('absen', '01')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('kampus', 'Politeknik Negeri Malang')
            ->with('email', 'azzam17102003@gmail.com')
            ->with('nohp', '081290707944')
            ->with('ig', '@jmdull_');
    }
}
