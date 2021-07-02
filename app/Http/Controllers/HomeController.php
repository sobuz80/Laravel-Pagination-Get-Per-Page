<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Write Your Code..
     *
     * @return string
    */
    public function index(Request $request)
    {
        $users = User::paginate(5);
       return view('users', compact('users'));
		
		//$users = User::paginate($request->get('per_page', 25));
        //return view('users', compact('users'));
    }
}