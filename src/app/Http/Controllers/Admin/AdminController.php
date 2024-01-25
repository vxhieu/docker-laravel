<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;

class AdminController
{
    public function index()
    {
        if(Auth::check()) redirect(route('admin.dashboard'));
        return view('admin.signin');
    }
}

