<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ProfileController extends Controller
{
    public function profile1()
    {
<<<<<<< HEAD
        $profile1 = Content::where('short_name', 'Azzam')->get();
        return view('profile1', compact('profile1'));
    }
    public function profile2()
    {
        $profile2 = Content::where('short_name', 'Tristan')->get();
        return view('profile2', compact('profile2'));
    }
    public function kuliah1()
    {
        $kuliah1 = Content::where('short_name', 'Azzam')->get();
        return view('kuliah1', compact('kuliah1'));
    }
    public function kuliah2()
    {
        $kuliah2 = Content::where('short_name', 'Tristan')->get();
        return view('kuliah2', compact('kuliah2'));
=======
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
>>>>>>> e911ebe5eb77bc700e6eec3e93bd92f127c70962
    }
}
