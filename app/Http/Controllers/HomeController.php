<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function admin()
    {
        return view('dashboardAdmin',
        [
            "title" => "Dashboard Admin"
        ]);
    }
    public function user()
    {
        return view('dashboardUser',
        [
            "title" => "Dashboard User"
        ]);
    }
}
