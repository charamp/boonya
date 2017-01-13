<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use App\AmuletList;
use App\AmuletCategory;
use App\AmuletImage;
use App\CategoryList;

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
    public function ShowAmuletPage($amulet_id) {

    	$amulet = AmuletList::where('amulet_id', '=', $amulet_id);

    	return View::make('admin.showamulet')->with('amulet_id', $amulet_id);
    }

    public function DoAddAmulet(Request $request) {
        $image_list = Array();
    	$image_length = count($request['amulet_image']);
	    for($i = 0; $i < $image_length; $i++) {
            if ($request['amulet_image'][$i] != null) {
    	    	$this->validate($request, [
                	'amulet_image.'.(string)$i => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            	]);

    	    	$random_number = (string)rand(pow(10, 2), pow(10, 3)-1);
    	    	$image_name = $random_number . time().'.'.$request->amulet_image[$i]->getClientOriginalExtension();
            	$request->amulet_image[$i]->move(public_path('images'), $image_name);
                Array_push($image_list, $image_name);
            }
	    }

        $random_number = (string)rand(pow(10,2), pow(10,4)-1);
        $amulet = new AmuletList();
        $amulet['amulet_id'] = 'BID-' . time() . $random_number;
        $amulet['amulet_name'] = $request['amulet_name'];
        $amulet['amulet_description'] = $request['amulet_description'];
        $amulet['amulet_price'] = (int)$request['amulet_price'];
        $amulet['amulet_status'] = $request['amulet_status'][0];
        $amulet['amulet_author'] = $request['amulet_author'];



        $amulet->save();

        $url = '/manage/showamulet/' . $amulet['amulet_id'];
    	return Redirect::to($url);
    }
}
