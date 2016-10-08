@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
            @if (Auth::guest())
                           
           <h1>  Welcome . Please Log in </h1>

           @else 

           <h3> Hello <b> {{ Auth::user()->name }} </b>, You are logged In </h3>

            @endif        
          
        </div>
    </div>
</div>
@endsection