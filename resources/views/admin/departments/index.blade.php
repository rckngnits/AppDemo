@extends('admin.layouts.template')

@section('content')
		<h3> List of all Departments </h3> <hr>

		<table class="table table-bordered table-hover">
			<tr>
				<th> Sl No. </th>
				<th> Title </th>
				<th> Description </th>
				<th> Status </th>
			</tr>
		@foreach ($departments as $department)
			<tr>
				<td> {{ $department -> id }}</td>
				<td> {{ $department -> name }}</td>
				<td> {{ $department -> description }}</td>
				<td> <a href="{{url('admin/department/'.$department->id)}}" class="btn btn-primary"> Details </a> </td>
			</tr>
		@endforeach
		</table>

@stop