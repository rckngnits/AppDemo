@extends('admin.layouts.template')

@section('content')
		
		<h3> Recent Activities </h3>
		<table class="table table-bordered table-hover">
			<tr>
				<th> Time </th>
				<th> List of Activities </th>				
			</tr>
		@foreach ($activities as $activity)
			<tr>
				<td> {{ $activity -> created_at }} </a></td>
				<td> <a href="{{url('/admin/user/'.$activity-> user -> id)}}">{{ $activity -> user -> name  }}</a>     added/commented on task titled <a href="{{url('/admin/task/'.$activity-> task -> id)}}" >{{ $activity -> task -> title }} </a></td>				
			</tr>
		@endforeach
		</table>
		
@stop