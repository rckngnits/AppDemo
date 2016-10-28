@extends('admin.layouts.template')

@section('content')
<h3> Add new Departments </h3> <hr>

<div class="row">
<div class="col-md-10">
	@include('admin.layouts.partials._notifications')
</div>
</div>
<div class="row">
	<div class="col-md-10 ">
	<form method="post" action="{{ url('/admin/department')}}">
		{{ csrf_field() }}
		<div class="form-group">
			<input type="text" name="name" class="form-control"> 
		</div>
		<div class="form-group">
			<textarea name="description" class="form-control"> </textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary"> Add Department </button>
		</div>
	</form>
	</div>
</div>

@stop