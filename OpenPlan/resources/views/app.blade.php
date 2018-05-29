<!DOCTYPE html>
<html>
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OpenPlan</title>
 
  <!-- Custom CSS -->
  @section('styles_laravel')
 
  <!-- Bootstrap Core CSS -->
  <link media="all" type="text/css" rel="stylesheet" href="/assets/css/bootstrap.css">
  <link media="all" type="text/css" rel="stylesheet" href="/assets/css/app.css">
 
  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  @show
 
  @yield('mis_estilos')
  
</head>
<body background="fondo1.png">
<style>
html, body {
  padding-top: 50px;
}
.navbar-inverse{
  background-color: #0b7bc4;
}
 
/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
}
 
/*
 * Configuración de Sidebar
 */
 
/* Oculta para el responsive móvil, lo mostramos después*/
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Añadimos scroll al contenido si es necesario. */
    background-color: #0b7bc4;
    border-right: 1px solid #eee;
  }
}
 
/* Barra de navegacion (Sidebar) */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #0b7bc4;
}
 
 
/*
 * Contenido principal
 */
.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}
</style>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('/')}}">OpenPlan</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">

        </ul>
        <form class="navbar-form navbar-right">
          <input type="text" class="form-control" placeholder="Search...">
        </form>
      </div>
    </div>
  </nav>
  <!-- <div class="container-fluid"> -->
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
 
        <!-- Aquí incluiremos el contenido de nuestra aplicación -->
        @yield('content')
        
      </div>
    </div>
  </div>
  <!-- </div> -->
 
  <!-- Scripts -->
  <script src="/assets/js/jquery.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
 
</body>
</html>