<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\Http\Requests;

class AdminController extends Controller
{
	public function LoginPage() {
		$page = 'admin';
		return View::make('admin.login');
	}
    public function AddAmuletPage() {
    	$page = 'admin';
    	return View::make('admin.addamulet');
    }
    public function AmuletListPage() {
    	$page = 'admin';
    	return View::make('admin.amuletlist');
    }
}
