@extends('admin.layouts.template')

@section('content')
		<h3> My Profile </h3> <hr>

		<div class="container">
			<p style="font-size:18px;" class="col-md-offset-2"> <b> {{ $user->name }} (Management) </b> </p>
			<p class="col-md-offset-2"> Email :- <a href="#"> {{ $user-> email }} </a> </p>
			<p class="col-md-offset-2"> contact :- 8899889988 </p>
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