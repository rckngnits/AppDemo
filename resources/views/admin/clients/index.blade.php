@extends('admin.layouts.template')

@section('content')
		
		<h3> List of all clients </h3>
		<table class="table table-bordered table-hover">
			<tr>
				<th> sl. No. </th>
				<th> Name </th>
				<th> email </th>
				<th> Contact Number </th>
				<th> Details </th>
			</tr>
		@foreach ($clients as $client)
			<tr>
				<td> {{ $client -> id }}</td>
				<td> {{ $client -> name }}</td>
				<td> {{ $client -> email}}</td>
				<td> {{$client -> primary_number }} </td>
				<td> <a href="{{ url('admin/client/'.$client->id)}}" class="btn btn-primary"> Details </a></td>
			</tr>
		@endforeach
		</table>
		
@stop