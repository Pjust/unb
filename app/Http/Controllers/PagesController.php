<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index()
	{
		return view('pages.home');
	}

	public function hvaderunbu()
	{
		return view('pages.hvaderunbu');
	}

	public function saadanvirkerunbu()
	{
		return view('pages.saadanvirkerunbu');
	}

	public function kontakt()
	{
		return view('pages.kontakt');
	}

	public function anmeldelser()
	{
	return view('pages.anmeldelser');
	}

	public function fordele()
	{
	return view('pages.fordele');
	}


}
