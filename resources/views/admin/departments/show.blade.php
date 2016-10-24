@extends('admin.layouts.template')

@section('content')
	<h3> {{ $department-> name }} </h3> <hr>
	<p> {{ $department-> description }} </p>
	<div class="row">
		<div class="col-md-2"> <a href="{{url('admin/department/'.$department->id.'/edit')}}" class="btn btn-primary btn-block"> Edit </a></div>
		<div class="col-md-2"> <a href="{{url('admin/department/'.$department->id.'/destroy')}}" class="btn btn-danger btn-block"> Delete </a> </div>
	</div>

@stop