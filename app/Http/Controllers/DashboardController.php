<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class DashboardController extends Controller //implements HasMiddleware
{
    public function index()
    {
        return view('users.dashboard');
    }

//    public static function middleware()
//    {
//        return [ 'auth' ];
//    }
}
