<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\Http\Requests;

class ManagementController extends Controller
{
	public function Howtobuy() {
    	return View::make('management.howtobuy');
    }

    public function Contact() {
    	return View::make('management.contact');
    }
}
