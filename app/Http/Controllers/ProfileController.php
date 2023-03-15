<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ProfileController extends Controller
{
    public function profile1()
    {
        $profile1 = Content::where('short_name', 'Azzam')->get();
        return view('profile1', compact('profile1'));
    }
    public function profile2()
    {
        $profile2 = Content::where('short_name', 'Bima')->get();
        return view('profile2', compact('profile2'));
    }
    public function kuliah1()
    {
        $kuliah1 = Content::where('short_name', 'Azzam')->get();
        return view('kuliah1', compact('kuliah1'));
    }
    public function kuliah2()
    {
        $kuliah2 = Content::where('short_name', 'Bima')->get();
        return view('kuliah2', compact('kuliah2'));
    }
}
