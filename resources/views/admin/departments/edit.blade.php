@extends('admin.layouts.template')

@section('content')
<h3> Edit Departments </h3> <hr>


<div class="row">
		<div class="col-md-12">
				@include('admin.layouts.partials._notifications')
		</div>

		
		@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
</div>
<div class="row">
	<div class="col-md-10 ">
	<form method="POST" action="{{ url('/admin/department/'.$department->id)}}">
		{{ method_field('PATCH')}}
		{{ csrf_field() }}
		<div class="form-group">
			<input type="text" name="name" class="form-control" value="{{$department -> name}}"> 
		</div>
		<div class="form-group">
			<textarea name="description" class="form-control">{{ $department -> description }}</textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary"> Update Department </button>
		</div>
	</form>
	</div>
</div>

@stop