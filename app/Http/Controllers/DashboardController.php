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
        $user = Auth::user();
        return view('dashboard', ['user' => $user]);
    }
}
