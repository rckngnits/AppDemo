@extends('admin.layouts.template')

@section('content')

	<div class="row">
		<div class="col-md-7"> 
			<h2> Client Details </h2>
			<div class="row">
				<div class="col-md-6"> Name : {{ $task  -> fk_client_id}} </div> <div class="col-md-6"> Email :-</div>
			</div>
			<div class="row">
				<div class="col-md-6"> Contact :- 99999999 </div> <div class="col-md-6"> Details 4</div>
			</div>
			<div class="row">
				<div class="col-md-6"> Details 5 </div> <div class="col-md-6"> Details 6 </div>
			</div>

		</div>
		<div class="col-md-5">
			<h2> Assigned User Details </h2>
			<div class="row">
				<div class="col-md-6"> Name :- {{$task -> fk_user_id_assign }} Name (Department) </div> <div class="col-md-6"> Email :- {{ $user -> email }} </div>
			</div>
			<div class="row">
				<div class="col-md-6"> Contact :- 99999999 </div> <div class="col-md-6"> Department </div>
			</div>
			<div class="row">
				<div class="col-md-6"> Details 5 </div> <div class="col-md-6"> Details 6 </div>
			</div>
			<br> <br>
		</div>
	</div>
	<div class="container">
		<div class="col-md-9" style="background-color:#CCE5FF">
			<h3> {{ $task -> title }} </h3> <hr>
			<p> {{ $task -> description }} </p>
		</div>
		<div class="col-md-3"> 
		<h4 style="background: #008AE6; display: block; color: #FFFFFF; padding:10px; margin: 0px 0px 10px 0px ;"> Task Information </h4>
		<p> Assigned User :- <a href="#"> John cena </a> </p>
		<p> Created at :- 21/10/2016 </p>
		<p> Deadline :- <span style="color: red;"> 31/10/2016 </span> </p>
		<p> Status :- closed </p>
		<a href="#" class="btn btn-block btn-success"> Close Task </a>
		</div>
	
		</div>
		<div class="container">
			<div class="row">
			<p> </p>
					<div class="col-md-2"> <a href="#" class="btn btn-primary btn-block"> Edit </a></div>
					<div class="col-md-2"> <a href="#" class="btn btn-danger btn-block"> Delete </a> </div>
			</div>
		</div>
@stop