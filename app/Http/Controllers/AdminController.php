<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\Http\Requests;

class AdminController extends Controller
{
    public function AddAmulet(){
    	return View::make('admin.addamulet');
    }
}
