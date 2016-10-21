<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
	public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	return view('admin.clients.index');
    }

    public function create()
    {
    	return view('admin.clients.create');
    }

    public function show()
    {
    	return view ('admin.clients.index');
    }
}
