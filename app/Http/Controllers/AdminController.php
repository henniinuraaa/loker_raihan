<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    function index()
    {
       return redirect('/login');
    }
    function show()
    {
       return view('/dashbord');
    }
    
    function admin()
    {
        
        echo "<a href='logout'>logout</a>";
    }
    
    function user()
    {
     
        echo "<a href='logout'>logout</a>";
    }
    
}
