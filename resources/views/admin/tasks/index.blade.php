@extends('admin.layouts.template')

@section('content')
		<h3> List of all Tasks </h3>

		<table class="table table-bordered table-hover">
			<tr>
				<th> Title </th>
				<th> Description </th>
				<th> Created (Date)</th>
				<th> Client </th>
				<th> Assigned To</th>
				<th> Status </th>
				<th> Details </th>
			</tr>
		@foreach ($tasks as $task)
			<tr>
				<td> {{ $task -> title }}</td>
				<td> {{ $task -> description}}</td>
				<td> {{ $task -> created_at }}</td>
				<td> Name of Client </td>
				<td> Name of User </td>
				<td> Open / Closed / Needs Attention </td>
				<td> <a href="{{ url('admin/task/'.$task->id)}}" class="btn btn-success"> Details </a> </td>
			</tr>
		@endforeach
		</table>
@stop