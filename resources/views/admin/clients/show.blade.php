@extends('admin.layouts.template')

@section('content')
	<div class="row">
		<div class="col-md-7"> 
			<h2> Client Details </h2>
			<div class="row">
				<div class="col-md-6"> Name :- {{$client->name}} </div> <div class="col-md-6"> Email :- {{$client->email}}</div>
			</div>
			<div class="row">
				<div class="col-md-6"> Contact :- {{$client -> primary_number }} </div> <div class="col-md-6"> Alternate Contact :- {{$client -> primary_number }} </div>
			</div>
			<div class="row">
				<div class="col-md-6"> Address :- {{$client -> address }} </div> <div class="col-md-6"> {{$client -> city }} , {{$client -> state }}  </div>				
			</div>
		</div>
		<div class="col-md-2 col-md-offset-1">
				<br> <br> <br>
				<a href="{{url('/admin/client/'.$client->id.'/edit')}}" class="btn btn-success btn-block"> Update Client </a>
				<a href="#" class="btn btn-danger btn-block"> Delete Record</a> 
		</div>
	</div>

	<div class="container-fluid">
		<div class="col-md-12">
			<h3> Tasks Related to {{$client -> name}} </h3>
			<table class="table table-bordered table-hover">
				<tr>
					<th> Title </th>
					<th> Description </th>
					<th> Assigned User</th>
					<th> Created at </th>
					<th> deadline </th>
					<th> Status </th>
				</tr>
			
				@foreach ($tasks as $task)
				<tr>
					<td> <a href="{{url('/admin/task/'.$task->id)}}" > {{$task -> title}} </a> </td>
					<td>   {{$task -> description }} </td>
					<td> {{$task -> user -> name}} </td>
					<td> {{$task -> created_at }}</td>
					<td> {{$task -> deadline }} </td>
					<td>  {{$task -> status-> title}} </td>
				</tr>

				@endforeach

			</table>
		</div>
	</div>
@stop