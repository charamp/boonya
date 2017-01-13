<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\AmuletList;
use App\CategoryList;
use App\AmuletImage;

class HomeController extends Controller
{
    public function Homepage() {
    	$image_path = '/images/';

    	$amulet_list = AmuletList::orderBy('time_created', 'desc')->take(16)->get();
    	foreach($amulet_list as $amulet) {
    		$image_first = AmuletImage::where('amulet_id', '=', $amulet['AMULET_ID'])->where('image_order', '=', 0)->first();
    		$amulet['IMAGE'] = $image_path . $image_first['IMAGE_URL'];
    	}
    	$category_list = CategoryList::all();
    	return View::make('home.home')->with('amulet_list', $amulet_list)->with('category_list', $category_list);
    }
}
