<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller
{
    public function Homepage() {
    	return View::make('home.home');
    }
}
