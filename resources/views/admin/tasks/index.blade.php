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
				<td> <a href="{{ url('admin/task/'.$task->id)}}" > {{ $task -> title }} </a> </td>
				<td> {{ $task -> description}}</td>
				<td> {{ $task -> created_at }}</td>
				<td> <a href ="{{url('/admin/client/'.$task->client->id)}}" > {{ $task -> client -> name}} </a> </td>
				<td> <a href ="{{url('/admin/user/'.$task->user->id)}}" > {{ $task -> user -> name}} </a> </td>
				<td> {{ $task -> status -> title }} </td>
				<td> <a href="{{ url('admin/task/'.$task->id)}}" class="btn btn-success"> Details </a> </td>
			</tr>
		@endforeach
		</table>
@stop