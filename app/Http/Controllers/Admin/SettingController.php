<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function __counstruct()
    {
    	$this->middlewatre('auth');
    }

    public function index()
    {
    	return view('admin.settings.index');
    }
}
