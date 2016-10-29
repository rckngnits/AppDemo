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

		<form method="POST" action="{{ url('/admin/client/'.$client->id)}}">
			{{ method_field('PATCH')}}
			{{ csrf_field() }}
			<div class="row">
				<div class="form-group col-md-7">
					<label for="name" class="control-label"> Name : </label>
					<input class="form-control" name="name" type="text" id="name" value="{{$client->name}} "required >
				</div>

				<div class="form-group col-md-5">
					<label for="email" class="control-label"> Email : </label>
					<input class="form-control" name="email" type="email" id="email" value="{{$client->email }} "required>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-6">
					<label for="primary_number" class="control-label"> Primary Number : </label>
					<input class="form-control" name="primary_number" type="text" id="primary_number" value="{{$client-> primary_number}}" required>
				</div>

				<div class="form-group col-md-6">
					<label for="secondary_number" class="control-label"> Secondary Number : </label>
					<input class="form-control" name="secondary_number" type="text" id="secondary_number" value="{{$client-> secondary_number}}" required>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-12">
					<label for="address" class="control-label"> Address :- </label>				
					<input class="form-control" name="address" type="text" id="address" value="{{$client-> address}}" required>
				</div>				
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="state" class="control-label"> State : </label>				
					<input class="form-control" name="state" type="text" id="state" value="{{$client-> state}}" required>
				</div>

				<div class="form-group col-md-4">
					<label for="city" class="control-label"> City : </label>
					<input class="form-control" name="city" type="text" id="city" value="{{$client-> city}}" required>
				</div>

				<div class="form-group col-md-4">
					<label for="pincode" class="control-label"> Pincode : </label>				
					<input class="form-control" name="pincode" type="text" id="pincode" value="{{$client-> pincode}}" required>
				</div>
			</div>

			<div class="row">
				<div class="col-md-1">
					<button class="btn btn-success"> Update Client Record </button>
				</div>
			</div>
		</form>


	</div>
</div>
@stop