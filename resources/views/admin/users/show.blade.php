@extends('admin.layouts.template')

@section('content')
		<h3> My Profile </h3> <hr>

		<div class="container">
		<div class="col-md-8">
			<p style="font-size:18px;" class="col-md-offset-2"> <b> {{ $user->name }} ({{$user -> department -> name}}) </b> </p>
			<p class="col-md-offset-2"> Email :- <a href="#"> {{ $user-> email }} </a> </p>
			<p class="col-md-offset-2"> contact :- {{$user -> primary_number }}</p>
		</div>
		<div class="col-md-4">
		<div class="col-md-12 form-group">
			<a href="#" class="btn btn-success btn-block form-control"> Update Details </a>
		</div>

		<div class="col-md-12 form-group">
			<a href="#" class="btn btn-primary btn-block form-control"> Change Department </a>
		</div>

		<div class="col-md-12 form-group">
			<a href="#" class="btn btn-danger btn-block form-control"> Remove User </a>
		</div>


		</div>
		</div>

		<div class="container">
		<div class="col-md-6">
				<h4> Assigned Clients </h4>
				<table class="table table-striped">
					<tr>
						<th> Name </th>
						<th> Email </th>
						<th> Contact </th>
					</tr>
					<tr>
						<td> <a href="#"> Name of Client </a></td>
						<td> contact@companymail.com</td>
						<td> 9999887766 </td>
					</tr>
					<tr>
						<td> <a href="#"> Name of Client </a></td>
						<td> contact@companymail.com</td>
						<td> 9999887766 </td>
					</tr>
					<tr>
						<td> <a href="#"> Name of Client </a></td>
						<td> contact@companymail.com</td>
						<td> 9999887766 </td>
					</tr>
					<tr>
						<td> <a href="#"> Name of Client </a></td>
						<td> contact@companymail.com</td>
						<td> 9999887766 </td>
					</tr>
				</table>

			</div>
				

			<div class="col-md-6">
				<h4> Tasks created </h4>
				<table class="table table-hover table-bordered">
					<tr>
						<th> Title </th>
						<th> Created at </th>
						<th> Deadline </th>
					</tr>
					
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>

				</table>

			</div>
			<div class="col-md-6">
				<h4> Open Tasks </h4>
				<table class="table table-hover table-bordered">
					<tr>
						<th> Title </th>
						<th> Created at </th>
						<th> Deadline </th>
					</tr>
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>
					
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>

				</table>

			</div>

			<div class="col-md-6">
				<h4> Closed Tasks </h4>
				<table class="table table-hover table-bordered">
					<tr>
						<th> Title </th>
						<th> Created at </th>
						<th> Deadline </th>
					</tr>
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>
					
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>
					<tr>
						<td> Recharge </td>
						<td> 21/oct/2014</td>
						<td> 21/0ct/2014</td>
					</tr>

				</table>

			</div>
		</div>
@stop