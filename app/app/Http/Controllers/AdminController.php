<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // check if user is authenticated
        if (!session()->has('user')) {
            return redirect('/login');
        }
        

        return view('admin.index');
    }
}
