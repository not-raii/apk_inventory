<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;


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

    public function dataAdmin (){
        $dataAdmin = User::find(1);
            return view('dataAdmin', compact('dataAdmin'));
        
    }
}

