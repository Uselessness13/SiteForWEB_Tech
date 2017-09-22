<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Card extends Controller
{
	public function add()
	{
		return view('add');
	}

	public function addCard()
	{
		
		return view();
	}
}
