@extends('admin.layouts.template')

@section('content')

		<h3> Add new role </h3> <hr>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					@include('admin.layouts.partials._notifications')
				</div>
			</div>
		<form method="POST" action="{{url('/admin/role/')}}">
			{{ csrf_field() }}
			<div class="form-group">
				<label class="control-label" for="name"> Name of Role </label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Name of the Role (one word)">
			</div>

			<div class="form-group">
				<label class="control-label" for="label"> Short Description </label>
				<input type="text" class="form-control" id="label" name="label" placeholder="Descritpion">
			</div>

			<div class="form-group">
			<button type="submit" class="btn btn-success"> Add Role </button>
		</div>
		</form>
		</div>
@stop