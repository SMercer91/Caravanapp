<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Caravan;
use App\CaravanImages;
use Illuminate\Support\Facades\Storage;

class CaravanController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('caravanadmin.caravanlist')->with(['caravan'=> Caravan::all()
            ]);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('caravanadmin.caravancreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('caravan.caravanlist')->with('success', "The Caravan <strong>Caravan</strong> has successfully been added to the database.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('caravanadmin.caravandelete')->with(['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('caravanadmin.caravanedit')->with(['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $year = $req->input('year');
        $model = $req->input('Model');
        $size = $req->input('size');
        $bedrooms = $req->input('bedrooms');
        $price = $req->input('price');
        $des = $req->input('description');

        $data = array('year'=>$year,'model'=>$model,'size'=>$size,'bedrooms'=>$bedrooms,'price'=>$price,'description'=>$des);
        Caravan::where('id', $id)->update($data);
        return redirect()->route('caravan.index')->with('success', "The caravan <strong>Caravan</strong> has successfully been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caravan = Caravan::find($id);
        $images = $caravan->images;
        foreach ($images as $img) {
            Storage::delete($img->path);
       }

        Caravan::destroy($id);
        return redirect()->route('caravan.index')->with('success', "The Caravan <strong>Caravan</strong> has successfully been Deleted.");
    }

}