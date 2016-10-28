<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\Client\StoreClientRequest;
use App\Http\Controllers\Controller;
use App\Models\Task;

class ClientController extends Controller
{
	public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::all(); 
        return view('admin.clients.index' , compact('clients'));
    }

    public function create()
    {
    	return view('admin.clients.create');
    }

    public function show(Client $client)
    {
        $tasks = Task::where('fk_client_id', $client->id)->with(['user'])->get();
        return view('admin.clients.show',compact('client','tasks'));
    }
    
    public function store(StoreClientRequest $request)
    {
        Client::create($request->all());
        return back()->with('success','Client Added');
    }

    public function edit(Client $client)
    {
        return view ('admin.clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return back()->with('success','Client Updated');
    }

}
