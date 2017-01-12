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

    public function DoAddAmulet(Request $request) {

    	$image_length = count($request['amulet_image']);
	    for($i = 0; $i < $image_length; $i++) {

	    	$this->validate($request, [
            	'amulet_image.'.(string)$i => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        	]);

	    	$random_number = (string)rand(pow(10, 2), pow(10, 3)-1);
	    	$imageName = $random_number . time().'.'.$request->amulet_image[$i]->getClientOriginalExtension();
        	$request->amulet_image[$i]->move(public_path('images'), $imageName);

	    }
    	return back()
    		->with('success','Image Uploaded successfully.')
    		->with('path',$imageName);
    }
}
