<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Peripheral;

class PeripheralController extends Controller
{
    public function index() {
		$peripherals = Peripheral::All();
		return view('pages.home', compact('peripherals'));
	}

	public function show($id) {
		$peripheral = Peripheral::findOrFail($id);
		return view('pages.peripheral', compact('peripheral'));
	}

	public function create() {
		return view('pages.create-peripheral');
	}

	public function store(request $request) {
		Peripheral::create($request -> All());
		return redirect() -> route('peripherals');
	}



}
