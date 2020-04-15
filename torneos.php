<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

     <meta name="description" content="">
     <meta name="author" content="">
	<title>Rincon del gamer - Torneos </title>
	<link rel="shortcut icon" type="image/x-icon" href="Public/img/gamepad.png">

  <!-- Bootstrap core CSS -->
  <link href="Public/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="Public/css/estilos.css" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"> <img class="center-block " src="Public/img/logo2.jpeg" width="130px" height="60px"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="plataformas.php">Plataformas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="juegos.php">Juegos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mapa.php">Ubicación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galeria.php">Galería</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="torneos.php">Torneos</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-outline-info mr-2 " href="usuarios/signup.php">
                Registrarse <i class="fa fa-user-plus "></i>
            </a>
            <a class="btn btn-outline-danger mr-2 " href="usuarios/login.php">
                Inciar Sesion <i class="fa fa-lock "></i>
            </a>
        </form>

      </div>
    </div>
  </nav>

<br>
<br>

<!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 align="center" class="display-3">Lista de Torneos</h1>
      <p class="lead"></p>
      
    </header>


  <br>
  <br>
  <br>



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->

  <?php
// 1) Conexión
 $consulta= "SELECT t.idTorneo,t.titulo, c.nombre nombreCon, j.nombre nombreJue,t.fecha,t.hora,t.modalidad,t.totalIntegrantesEquipo,t.forma,t.maximoEquipos,
    t.descripcion,t.estatus,t.costo from torneo t
    inner join consola c on c.idConsola=t.idConsola
    inner join juego j on j.idJuego=t.idJuego 
    order by fecha,hora;"; 
$conexion = mysqli_connect( "localhost", "root", "" );
$db = mysqli_select_db( $conexion, "rincondelgamer" );
$resultado = mysqli_query( $conexion, $consulta );
echo "<center><h6>TORNEOS ACTUALES</h6></center>";
echo "<table>";  
echo "<tr>";  
echo "<th>Numero de torneo</th>";  
echo "<th>Nombre del torneo</th>";  
echo "<th>Consola</th>";
echo "<th>juego</th>";
echo "<th>Fecha</th>";
echo "<th>Hora</th>";
echo "<th>Modalidad</th>";
echo "<th>Gamers por equipo</th>";
echo "<th>Equipos permitidos</th>";
echo "<th>Forma</th>";
echo "<th>Descripcion</th>";
echo "<th>Estatus</th>";
echo "<th>Costo</th>";  
echo "</tr>";  
//modalidad 4
/*ind par ter otro*/
while ($columna = mysqli_fetch_array( $resultado ))
{
 echo "<tr>";
 echo "<td>" . $columna[0] . "</td>";
 echo "<td>" . $columna[1] . "</td>";
 echo "<td>" . $columna[2] . "</td>";
 echo "<td>" . $columna[3] . "</td>";
 echo "<td>" . $columna[4] . "</td>";
  echo "<td>" . $columna[5] . "</td>";
 if ($columna[6]==1) {
   echo "<td>" . "individual". "</td>";
 }
 if ($columna[6]==2) {
   echo "<td>" . "parejas". "</td>";
 }
 if ($columna[6]==3) {
   echo "<td>" . "tercias". "</td>";
 }
 if ($columna[6]==4) {
   echo "<td>" . "otros". "</td>";
 }
  echo "<td>" . $columna[7] . "</td>";
   //echo "<td>" . $columna[8] . "</td>";
   echo "<td>" . $columna[9] . "</td>";
    //echo "<td>" . $columna[9] . "</td>";
    if ($columna[8]==1) {
      echo "<td>" ."Presencial" . "</td>";
    }
    if ($columna[8]==2) {
      echo "<td>" ."Linea" . "</td>";
    }
    if ($columna[8]==3) {
      echo "<td>" ."Ambas" . "</td>";
    }
     echo "<td>" . $columna[10] . "</td>";
      echo "<td>" . $columna[11] . "</td>";
 /* . $columna[2] . "</td><td>" . $columna[3] . "</td>".
 "<td>" . $columna[4] . "</td><td>" . $columna[5] . "</td>".
 "<td>" . $columna[6] . "</td><td>" . $columna[7] . "</td>".
 "<td>" . $columna[8] . "</td><td>" . $columna[9] . "</td>".
 "<td>" . $columna[10] . "</td><td>" . $columna[11] . "</td>";
 echo "</tr>";*/
 echo "</tr>";
}
echo "</table>";  

?>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<br>
<br>
<br>




  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<br>
<br>
<br>



  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

  <!-- Page Content -->
 <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Gamer Land 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="Public/js/jquery.min.js"></script>
  <script src="Public/js/bootstrap.bundle.min.js"></script>



</body>
</html>