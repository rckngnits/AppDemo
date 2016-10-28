<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function __constructor()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$activities = activity::orderBy('created_at' , 'desc')->with(['user','task'])->get(); 
    	return view('admin.activities.index', compact('activities'));
    }
}
