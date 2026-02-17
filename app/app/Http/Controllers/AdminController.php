<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Occasion;
use App\Models\Service;
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

    public function occasions()
    {

        // check if user is authenticated
        if (!session()->has('user')) {
            return redirect('/login');
        }
        
        $occasions = Occasion::all();
        return view('admin.occasions', compact('occasions'));

    }

     public function services()
    {

        // check if user is authenticated
        if (!session()->has('user')) {
            return redirect('/login');
        }
        
        $services = Service::all();
        return view('admin.services', compact('services'));

    }

    public function messages()
    {

        // check if user is authenticated
        if (!session()->has('user')) {
            return redirect('/login');
        }
        
        $messages = Message::all();
        return view('admin.messages', compact('messages'));

    }
}
