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

<script>
  window.Laravel = <?php echo json_encode([
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Name <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Logout</a></li>
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

      <div class="panel">
      <br> <br> <br> <br>
      </div>



      <div class="panel">
      <ul>
        <li> <a href="#"> Dashboard </a> </li>
      </ul>
      </div>

      <div class="panel">
      <ul>
        <li> <a href="#"> Profile </a> </li>
      </ul>
      </div>


      <div class="panel">
      <ul>
        <li> <a href="#" data-parent="menu" data-toggle="collapse" class="accordion-toggle" data-target="#user-nav"> Users </a> </li>
      </ul>
      <ul class="collapse" id="user-nav">
        <li> <a href="#"> Add New Users </a> </li>
        <li> <a href="#"> All Users </a> </li>    
      </ul> 
      </div>

      <div class="panel">
      <ul>
        <li> <a href="#" data-parent="menu" data-toggle="collapse" class="accordion-toggle" data-target="#department-nav"> departments </a> </li>
      </ul>
      <ul class="collapse" id="department-nav">
        <li> <a href="#"> Add New department </a> </li>
        <li> <a href="#"> All departments </a> </li>    
      </ul> 
      </div>

      <div class="panel">
      <ul>
        <li> <a href="#" data-parent="menu" data-toggle="collapse" class="accordion-toggle" data-target="#role-nav"> roles </a> </li>
      </ul>
      <ul class="collapse" id="role-nav">
        <li> <a href="#"> Add New role </a> </li>
        <li> <a href="#"> All roles </a> </li>    
      </ul> 
      </div>

      <div class="panel">
      <ul>
        <li> <a href="#" data-parent="menu" data-toggle="collapse" class="accordion-toggle" data-target="#client-nav"> clients </a> </li>
      </ul>
      <ul class="collapse" id="client-nav">
        <li> <a href="#"> Add New client </a> </li>
        <li> <a href="#"> All clients </a> </li>    
      </ul> 
      </div>

      <div class="panel">
      <ul>
        <li> <a href="#" data-parent="menu" data-toggle="collapse" class="accordion-toggle" data-target="#task-nav"> Tasks </a> </li>
      </ul>
      <ul class="collapse" id="task-nav">
        <li> <a href="#"> Add New Task </a> </li>
        <li> <a href="#"> All Tasks </a> </li>    
      </ul> 
      </div>

      <div class="panel">
      <ul>
        <li> <a href="#"> Settings </a> </li>
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





<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
