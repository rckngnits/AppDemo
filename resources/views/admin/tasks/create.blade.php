@extends('admin.layouts.template')

@section('content')
<h3> Add new Tasks </h3> <hr>

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


<form method="POST" action="{{url('/admin/task/')}}">
	{{ csrf_field() }}
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<lable class="control-lable" for="title"> Title:  </lable>
				<input class="form-control" type="text" id="title" name="title">
			</div>	
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<lable class="control-lable" for="description"> Description:  </lable>
				<textarea class="form-control" rows=10 id=
				"description" name="description"></textarea>
			</div>	
		</div>
		
		<div class="col-md-6"> 
		<div class="form-group">
			<lable for="client" class="control-lable"> Client : </lable>
			<select class="form-control" name="fk_client_id" id="client">
					@foreach ( $clients as $client )
					<option value="{{$client -> id}}"> {{$client -> name }} ( {{$client -> email }} ) </option>
					@endforeach
			</select>
		</div>
		</div>


		<div class="col-md-6">
		<div class="form-group">
			<lable for="user_assigned" class="control-lable"> Assign User : </lable>
			<select class="form-control" name="fk_user_id_assign" id="user_assigned">
				@foreach ( $users as $user )
					<option value="{{$user -> id}}"> {{$user -> name }} </option>
				@endforeach
				</select>
		</div>
		</div>
		

		<div class="col-md-6">
			<div class="form-group">
				<lable for="fk_status_id" class="control-lable"> Status </lable>
				<select class="form-control" name="fk_status_id">
					@foreach ($statuses as $s)
						<option value="{{$s -> id}}"> {{$s -> title }} </option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="col-md-6"> 
		<div class="form-group">
			<lable for="deadline" class="control-lable"> Deadline : </lable>
			<input class="form-control" id="deadline" name="deadline" type="date">
		</div>
		</div>

		<div class="col-md-2">
		<button class="btn btn-success btn-block"> Create Tasks </button> </div>
		<div class="col-md-2">
		<button class="btn btn-danger btn-block"> Reset Tasks </button>
		</div>
	</div>
</form>

@stop