@extends('admin.layouts.template')

@section('content')
	<div class="row">
		<div class="col-md-7"> 
			<h2> Client Details </h2>
			<div class="row">
				<div class="col-md-6"> Name :- {{$client->name}} </div> <div class="col-md-6"> Email :- {{$client->email}}</div>
			</div>
			<div class="row">
				<div class="col-md-6"> Contact :- {{$client -> primary_number }} </div> <div class="col-md-6"> Details 4</div>
			</div>
			<div class="row">
				<div class="col-md-6"> Details 5 </div> <div class="col-md-6"> Details 6 </div>				
			</div>
		</div>
		<div class="col-md-2 col-md-offset-1">
				<br> <br> <br>
				<a href="{{url('/admin/client/'.$client->id.'/edit')}}" class="btn btn-success btn-block"> Update Client </a>
				<a href="#" class="btn btn-danger btn-block"> Delete Record</a> 
		</div>
	</div>

	<div class="container-fluid">
		<div class="col-md-10">
			<h3> Tasks Related to User  </h3>
			<table class="table table-bordered table-hover">
				<tr>
					<th> Title </th>
					<th> Description </th>
					<th> Assigned User</th>
					<th> Created at </th>
					<th> Status </th>
				</tr>

				<tr style="background-color:#adebad">
					<td> Title </td>
					<td> Description of task related to user </td>
					<td> Assigned User</td>
					<td> Created at </td>
					<td> Status </td>
				</tr>

				<tr style="background-color:#adebad">
					<td> Title </td>
					<td> Description of task related to user </td>
					<td> Assigned User</td>
					<td> Created at </td>
					<td> Status </td>
				</tr>

				<tr style="background-color:#ff6666">
					<td> Title </td>
					<td> Description of task related to user </td>
					<td> Assigned User</td>
					<td> Created at </td>
					<td> Attention needed </td>
				</tr>

				<tr style="background-color:#adebad">
					<td> Title </td>
					<td> Description of task related to user </td>
					<td> Assigned User</td>
					<td> Created at </td>
					<td> Status </td>
				</tr>

				<tr style="background-color:#adebad">
					<td> Title </td>
					<td> Description of task related to user </td>
					<td> Assigned User</td>
					<td> Created at </td>
					<td> Status </td>
				</tr>

				<tr style="background-color:#adebad">
					<td> Title </td>
					<td> Description of task related to user </td>
					<td> Assigned User</td>
					<td> Created at </td>
					<td> Status </td>
				</tr>
			</table>
		</div>
	</div>
@stop