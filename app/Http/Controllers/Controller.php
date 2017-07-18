<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Caravan;
use App\CaravanImages;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
    	$year = $req->input('year');
    	$model = $req->input('Model');
    	$size = $req->input('size');
    	$bedrooms = $req->input('bedrooms');
    	$price = $req->input('price');
    	$extras = $req->input('extras');
        $des = $req->input('description');

    	$data = array('year'=>$year,'model'=>$model,'size'=>$size,'bedrooms'=>$bedrooms,'price'=>$price,'extras'=>$extras,'description'=>$des);

    	$files = $req->file('caravanPhotos');
    	$id = DB::table('caravans')->insertGetId($data);
    	foreach ($files as $file) {
    		$filename = $file->store('photos');
    		$data = array('caravan_id'=>$id,'path'=>$filename);
			DB::table('caravan_images')->insert($data);
    	}

                
    	}
    function searchresult(Request $req)
    {
        $data = $req->input('searchterm');
        return view('pages/stock')->with(['caravan'=> Caravan::where('model',$data)->get()]);
    }
    	
}