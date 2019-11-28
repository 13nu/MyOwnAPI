<?php namespace App\http\Controllers;


class MyController extends Controller
{
	public function index($nama = 'user')
	{
		return view('hi', ['nama' => $nama]);
	}
}