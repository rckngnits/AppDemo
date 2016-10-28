<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width= device-width, initial-scale-1">
<meta name="description" content="">
<meta name="author" content="">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title> {{ config('app.name', 'ABC Services') }} </title>

<!-- Styles -->
<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/css/bootstrap-theme.css" rel="stylesheet">
<link href="/css/admin.css" rel="stylesheet">
<link href="/css/font-awesome.css" rel="stylesheet">

<script>
  window.'ABC Services' = <?php echo json_encode([
   'csrfToken' => csrf_token(),
   ]); ?>
 </script>
</head>

<body>

<!-- Start Header Section -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ABC Services Admin Pannel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/admin/profile') }}">Profile</a></li>
            <li><a href="{{ url('/admin/settings') }}">Settings</a></li>
            <li role="separator" class="divider"></li>
            <li>  <a href="{{ url('/logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
            </li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- End Header Section -->



<!-- Start Main Wrap -->
<div class="container-fluid">
  <!-- Start menu section -->
    <menu class="col-md-2">

      <div class="panel row">
        <div class="col-md-4"> 
            <img src=" {{ url('/img/user.gif') }} " />


        </div>
        <div class="col-md-8">
            <h4> {{ Auth::user()->name }} </h4>
            <h6> Management </h6>


        </div>
      </div>



      <div class="panel">
      <ul>
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-line-chart" aria-hidden="true"> </i> Dashboard </a> 
      </a>


         </li>
      </ul>
      </div>

      <div class="panel">
      <ul>
        <li> 
        <a href="#" data-parent="menu" data-toggle="collapse" class="accordion-toggle" data-target="#user-nav"> 
          <i class="fa fa-user" aria-hidden="true"> </i>   Users </a> 
        </li>
      </ul>
      <ul class="collapse submenu" id="user-nav">
        <li> <a href="{{ url('/admin/user/create') }}">Add New Users </a> </li>
        <li> <a href="{{ url('/admin/user') }}"> All Users </a> </li>    
      </ul> 
      </div>

      <div class="panel">
      <ul>
        <li> <a href="#" data-parent="menu" data-toggle="collapse" class="accordion-toggle" data-target="#department-nav"> <i class="fa fa-building-o" aria-hidden="true"> </i> departments </a> </li>
      </ul>
      <ul class="collapse submenu" id="department-nav">
        <li> <a href="{{ url('/admin/department/create') }}"> Add New department </a> </li>
        <li> <a href="{{ url('/admin/department') }}"> All departments </a> </li>    
      </ul> 
      </div>

      <div class="panel">
      <ul>
        <li> <a href="#" data-parent="menu" data-toggle="collapse" class="accordion-toggle" data-target="#role-nav">  <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> roles </a> </li>
      </ul>
      <ul class="collapse submenu" id="role-nav">
        <li> <a href="{{ url('/admin/role/create') }}"> Add New role </a> </li>
        <li> <a href="{{ url('/admin/role') }}"> All roles </a> </li>    
      </ul> 
      </div>

      <div class="panel">
      <ul>
        <li> <a href="#" data-parent="menu" data-toggle="collapse" class="accordion-toggle" data-target="#client-nav">  <i class="fa fa-users" aria-hidden="true"> </i> clients </a> </li>
      </ul>
      <ul class="collapse submenu" id="client-nav">
        <li> <a href="{{ url('/admin/client/create') }}"> Add New client </a> </li>
        <li> <a href="{{ url('/admin/client') }}"> All clients </a> </li>    
      </ul> 
      </div>

      <div class="panel">
      <ul>
        <li> <a href="#" data-parent="menu" data-toggle="collapse" class="accordion-toggle" data-target="#task-nav">  <i class="fa fa-commenting-o" aria-hidden="true"> </i> Tasks </a> </li>
      </ul>
      <ul class="collapse submenu" id="task-nav">
        <li> <a href="{{ url('/admin/task/create') }}"> Add New Task </a> </li>
        <li> <a href="{{ url('/admin/task') }}"> All Tasks </a> </li>    
      </ul> 
      </div>

      <div class="panel">
      <ul>
        <li> <a href="{{ url('/admin/settings') }}"> <i class="fa fa-cog" aria-hidden="true"></i> Settings </a> </li>
      </ul>
      </div>

      <div class="panel">
      <ul>
        <li> <a href="#"> Sign Out </a> </li>
      </ul>
      </div>
    </menu>
</div>
<!-- End Menu Section -->

<!- start Content Section -->
<div class="col-md-10">
  @yield('content')
</div>
<!-- End Body Section -->
</div><!-- /.container-fluid -->





<script src="{{url('js/jquery.js')}}"></script>
<script src="{{ url('js/bootstrap.min.js')}}"> </script>
</body>
</html>
