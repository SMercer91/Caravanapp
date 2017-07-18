<?php

namespace App\Http\Controllers;

use App\Caravan;
use App\CaravanImages;


class PagesController extends Controller {

	public function getIndex() {
		return view('pages/index');
	} 

	public function getStock() {

		
		return view('pages/stock')->with(['caravan'=> Caravan::all()
			]);
	} 

	public function getCaravan() {
		return view('pages/caravan');
	} 

	public function getBloghome1() {
		return view('pages/bloghome1');
	} 

	public function getBloghome2() {
		return view('pages/bloghome2');
	}

	public function getBlogpost() {
		return view('pages/blogpost');
	}

	public function getContact() {
		return view('pages/contact');
	}
	public function getForm() {
		return view('insertForm');
	}

	
} 