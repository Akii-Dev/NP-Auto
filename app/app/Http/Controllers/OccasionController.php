<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OccasionController extends Controller
{
    public function create()
    {
        // check if user is authenticated
        if (!session()->has('user')) {
            return redirect('/login');
        }
        

        return view('occasion.create');
    }
}
