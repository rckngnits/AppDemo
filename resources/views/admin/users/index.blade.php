@extends('admin.layouts.template')

@section('content')
		<h3> List of all Users </h3>
		<table class="table table-bordered table-hover">
			<tr>
				<th> sl. No. </th>
				<th> Name </th>
				<th> email </th>
				<th> Work Number </th>
				<th> Department </th>
				<th> Status </th>
			</tr>
		@foreach ($users as $user)
			<tr>
				<td> {{ $user -> id }}</td>
				<td> {{ $user -> name }}</td>
				<td> {{ $user -> email}}</td>
				<td> {{ $user -> primary_number }} </td>
				<td> {{$user -> department -> name }} </td>
				<td> <a href="{{ url('admin/user/'.$user->id)}}" class="btn btn-primary"> Details </a></td>
			</tr>
		@endforeach
		</table>
@stop