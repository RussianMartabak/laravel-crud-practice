<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    function form() {
        return view('form');
    }

    function submit(Request $request) {
        $fname = $request['first-name'];
        $lname = $request['last-name'];
        return view('welcome', compact('fname', 'lname'));
    }
}
