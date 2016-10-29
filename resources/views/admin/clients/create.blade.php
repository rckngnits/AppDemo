@extends('admin.layouts.template')

@section('content')
<h3> Add new clients </h3> <hr>

<div class="row">
	<div class="col-md-12">

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

		<form method="POST" action="{{ url('/admin/client')}}">
			{{ csrf_field() }}
			<div class="row">
				<div class="form-group col-md-6">
					<label for="name" class="control-label"> Name : </label>
					<input class="form-control" name="name" type="text" id="name" placeholder="Enter Full name of Client" required >
				</div>

				<div class="form-group col-md-6">
					<label for="email" class="control-label"> Email : </label>
					<input class="form-control" name="email" type="email" id="email" placeholder="Email Address of Client" required>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-6">
					<label for="primary_number" class="control-label"> Primary Number : </label>
					<input class="form-control" name="primary_number" type="text" id="primary_number" placeholder="Contact Number without country code" required>
				</div>

				<div class="form-group col-md-6">
					<label for="secondary_number" class="control-label"> Secondary Number : </label>
					<input class="form-control" name="secondary_number" type="text" id="secondary_number"  placeholder="Alternate Number" required>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-12">
					<label for="address" class="control-label"> Address :- </label>				
					<input class="form-control" name="address" type="text" id="address" placeholder="Full address of client" required>
				</div>				
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="state" class="control-label"> State : </label>				
					<input class="form-control" name="state" type="text" id="state" Placeholder="state" required>
				</div>

				<div class="form-group col-md-4">
					<label for="city" class="control-label"> City : </label>
					<input class="form-control" name="city" type="text" id="city" placeholder="City" required>
				</div>

				<div class="form-group col-md-4">
					<label for="pincode" class="control-label"> Pincode : </label>				
					<input class="form-control" name="pincode" type="text" id="pincode" placeholder="Pincode" required>
				</div>
			</div>

			<div class="row">
				<div class="col-md-1">
					<button class="btn btn-success"> Create Client </button>
				</div>
			</div>
		</form>


	</div>
</div>
@stop