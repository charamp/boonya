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
		return View::make('admin.login')->with('page', $page);
	}
    public function AddAmuletPage() {
    	$page = 'admin';
        $category_list = CategoryList::all();
    	return View::make('admin.addamulet')->with('page', $page)->with('category_list', $category_list);
    }
    public function AmuletListPage() {
    	$page = 'admin';
    	return View::make('admin.amuletlist')->with('page', $page);;
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
                Array_push($image_list, Array($image_name, $i));
            }
	    }

        $random_number = (string)rand(pow(10,2), pow(10,4)-1);
        $amulet_id = 'BID-' . time() . $random_number;
        $amulet = new AmuletList();
        $amulet['amulet_id'] = $amulet_id;
        $amulet['amulet_name'] = $request['amulet_name'];
        $amulet['amulet_description'] = $request['amulet_description'];
        $amulet['amulet_price'] = (int)$request['amulet_price'];
        $amulet['amulet_status'] = $request['amulet_status'][0];
        $amulet['amulet_author'] = $request['amulet_author'];
        $amulet->save();

        foreach($image_list as $image_name) {
            $image = new AmuletImage();
            $image['image_id'] = 'IID-' . explode('.', $image_name[0])[0];
            $image['image_url'] = $image_name[0];
            $image['image_order'] =$image_name[1];
            $image['amulet_id'] = $amulet_id;
            $image->save();
        }

        foreach($request['amulet_category'] as $category) {
            $amulet_category = new AmuletCategory();
            $amulet_category['amulet_id'] = $amulet_id;
            $amulet_category['category_id'] = $category;
            $amulet_category->save();
        }


        $url = '/manage/showamulet/' . $amulet['amulet_id'];
    	return Redirect::to($url);
    }
}
