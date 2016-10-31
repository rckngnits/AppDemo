@extends('admin.layouts.template')

@section('content')
		<h3> List of all Roles </h3>
		
		@foreach ($users as $user)
			
			<p>	 {{$user -> roles  }}  </p>
				
		@endforeach

		
@stop