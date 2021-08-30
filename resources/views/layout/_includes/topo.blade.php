<!DOCTYPE html>
<html>
   <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
           
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
<header>
    <nav>
        <div class="nav-wrapper">
        <a href="{{route('admin.cursos')}}" class="brand-logo right">Cursos</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="/">home</a></li>
            <li><a href="{{route('admin.cursos')}}">cursos</a></li>
        </ul>
        </div>
    </nav>
</header>