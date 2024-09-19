<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    function index(){
        return view('admin');
    }

    function show(){
        return view('admin');
    }

    function dashboard(){
        $users = Auth::user();
        return $users->role->name;
        // return $users;
        // return "OK";
    }
}
