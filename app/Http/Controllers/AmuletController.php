<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\AmuletList;
use App\CategoryList;

class AmuletController extends Controller
{
    public function Amuletlist() {
        $category_list = CategoryList::all();
    	return View::make('amulet.amuletlist')->with('category_list', $category_list);
    }

    public function Show($amulet_id){
    	# query amulet
    	$result = array();
    	$result['amulet_id'] = 1;
    	$result['amulet_name'] = 'หลวงพ่อทดสอบ';
    	$result['amulet_description'] = 'หลวงพ่อทดสอบ วัดระฆัง รุ่น 53 เนื้อทองแดงกะไหล่เงิน';
    	$result['amulet_price'] = 500;
    	$result['amulet_status'] = 'พร้อมเช่า';
    	$result['amulet_image'] = ['http://localhost:8000/img/test.jpg'];
    	return View::make('amulet.show')->with('result', $result);
    }

    public function Load(Request $request){
        $result = AmuletList::get();
        return response()->json($result);
    }
}
