@extends('admin.layouts.template')

@section('content')
		<h3> Add users  </h3> <hr>

		<div class="row">
			<div class="col-md-12">
			@include('admin.layouts.partials._notifications')
			</div>
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

		<form class="" method="POST" action="{{url('/admin/user')}}">
		{{ csrf_field() }}

		<div class="row">
		<div class="col-md-6 form-group">
			<label for="name" class="control-label"> Name : </label>
			<input type="text" class="form-control" id="name" name="name" required>
		</div>

		<div class="col-md-6 form-group">
			<label for="email" class="control-label"> Email : </label>
			<input type="email" class="form-control" id="email" name="email" required>
		</div>
		</div>

		<div class="row">
		<div class="col-md-6 form-group">
			<label for="primary_number" class="control-label"> Primary Number : </label>
			<input type="text" class="form-control" id="primary_number" name="primary_number" required>
		</div>

		<div class="col-md-6 form-group">
			<label for="secondary_number" class="control-label"> Secondary Number : </label>
			<input type="text" class="form-control" id="secondary_number" name="secondary_number" required>
		</div>

		<div class="col-md-6 form-group">
			<label for="password" class="control-label"> Password : </label>
			<input type="text" class="form-control" id="password" name="password" required>
		</div>

		<div class="col-md-6 form-group">
			<label for="fk_department_id" class="control-label"> Department : </label>
			<select name="fk_department_id" class="form-control">
			@foreach ($departments as $department)
			<option value="{{$department -> id }}"> {{ $department ->name }} </option>
			@endforeach			
			</select>
		</div>

		<div class="col-md-6 form-group">
			<label for="role_id" class="control-label"> Role (Decides Access level on website) : </label>
			<select name="role_id" class="form-control">
			@foreach ($roles as $role)
			<option value="{{$role -> id }}"> {{ $role ->label }} </option>
			@endforeach			
			</select>
		</div>

		
		</div> 
		<div class="row">
				<div class="col-md-1">
					<button class="btn btn-success"> Add User </button>
				</div>
			</div>
		</form>
@stop