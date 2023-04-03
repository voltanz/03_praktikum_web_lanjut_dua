<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facedes\Auth;
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> d607cab6e2bd73d0ccf10fc0c403c24c95d9f668

class DashboardController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $user = Auth::user();
        return view('dashboard', ['user' => $user]);
=======
        return view('dashboard')
            ->with('full_name', "Ahmad Bima Tristan Ibrahim");
>>>>>>> e69031d89b9d6999bc020030921d598420e9b74d
    }
}
