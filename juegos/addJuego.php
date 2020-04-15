<?php
session_start();
if(!isset($_SESSION['iniciada'])){
    header("Location: ../salir.php");
}
$id=0;
if(isset($_GET['jjj'])){
  $id = filter_var($_GET['jjj'],FILTER_SANITIZE_NUMBER_INT);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rincón del gamer </title>
    <link rel="shortcut icon" href="../Public/img/logo2.jpeg">
    <link rel="stylesheet" href="../Public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../Public/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../Public/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../Public/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../Public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../Public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../Public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../Public/plugins/iCheck/all.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../Public/bower_components/select2/dist/css/select2.min.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="../Public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="../Public/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../Public/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Public/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../Public/bower_components/Ionicons/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../Public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="../Public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../Public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../Public/plugins/iCheck/square/blue.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="../Public/css/estilos_registro.css">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
    <!-- multiselect style -->
    <link rel="stylesheet" href="../Public/css/bootstrap-multiselect.css" type="text/css">
    <link rel="stylesheet" href="../Public/css/fileinput.css" type="text/css">
  </head>
  <body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="juegos.php"> <img class="center-block " src="../Public/img/logo.png" width="250px" height="100px"> </a>
        </div>
        <div class="register-box-body">
            <h4> <p class="login-box-msg"> Registro de juegos </p> </h4>
            <form id="frmRegistrar">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" maxlength="25">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <p id="alerta_nombre" style="display:none;">*El campo <b>Nombre</b> es obligatorio.</p>
              </div>
              <div class="form-group has-feedback">
                <select name="consola[]" id="consola" class="form-control" multiple="multiple">
                </select>
                <p id="alerta_consola" style="display:none;">*El campo <b>Consola</b> es obligatorio.</p>
              </div>
              <div class="form-group has-feedback">
                <input id="foto" name="foto" type="file" class="file" accept="image/*" data-show-upload="false" data-show-caption="true" data-msg-placeholder="Imagen...">
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar</button>
                  <div id="resultado"></div>
                </div>
              </div>
            </form>
            <hr>
            <a id="regresarbtn" href="juegos.php" class="text-center btn btn-success btn-block"> <p> Regresar </p> </a>
        </div>
    </div>
    <!-- jQuery UI 1.11.4 -->
    <script src="../Public/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <!-- Morris.js charts -->
    <script src="../Public/bower_components/raphael/raphael.min.js"></script>
    <script src="../Public/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../Public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../Public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../Public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../Public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../Public/bower_components/moment/min/moment.min.js"></script>
    <script src="../Public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../Public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../Public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../Public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../Public/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../Public/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../Public/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../Public/js/demo.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../Public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../Public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../Public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../Public/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- Select2 -->
    <script src="../Public/bower_components/select2/dist/js/select2.full.min.js"></script>
    <!-- bootstrap datepicker -->
    <script src="../Public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="../Public/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../Public/plugins/iCheck/icheck.min.js"></script>
    <!-- jQuery 3 -->
    <script src="../Public/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- multiselect -->
    <script type="text/javascript" src="../Public/js/bootstrap-multiselect.js"></script>
    <script type="text/javascript" src="../Public/js/fileinput.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $.ajax({
          url: '../consolas/getConsolas_.php',
          type: 'POST',
          dataType:'json',
          async: false,
          cache: false,
          beforeSend : function (){
            $("#resultado").fadeOut(200, function (){$("#resultado").html("<center><img border='0' src='../Public/img/loading.gif'></center>");});
            $("#resultado").fadeIn(100);
          },
          success: function (returndata) {
            $("#resultado").fadeOut(300, function (){$("#resultado").html("");});
            $("#resultadoJson").html("");
            if(returndata[0].error==0){
              $("#consola").empty();
              for (var i=0; i<returndata[1].length; i++) {
                $("#consola").append('<option value="'+returndata[1][i].idConsola+'">'+returndata[1][i].nombre+'('+returndata[1][i].nombrePla+')'+'</option>');
              }
            }else{
                var rError=returndata[1];
                $("#resultadoJson").html(rError);
            }
          },
          error: function (){
            $("#resultado").fadeOut(200, function (){$("#resultado").html("<span class= \"error\">Ha ocurrido un error, inténtelo nuevamente</span>");});
            $("#resultado").fadeIn(100);
          }
        });
        $("#frmRegistrar").submit(function(event){
          event.preventDefault();
          var formData = new FormData($(this)[0]);
          $.ajax({
            url: "addJuego_.php",
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend : function (){
              $("#resultado").fadeOut(200, function (){$("#resultado").html("<center><img border='0' src='../Public/img/loading.gif'></center>");});
              $("#resultado").fadeIn(100);
            },
            success: function (returndata) {
              console.log(returndata);
              $("#resultado").fadeOut(300, function (){$("#resultado").html(returndata);});
              $("#resultado").fadeIn(300);
            },
            error: function (){
              $("#resultado").fadeOut(200, function (){$("#resultado").html("<span class= \"error\">Ha ocurrido un error, inténtelo nuevamente</span>");});
              $("#resultado").fadeIn(100);
            }
          });
          return false;
        });
        var id = $('#id').val();
        if(id > 0){
          console.log(id);
          $.ajax({
            url: 'getConsola_.php',
            type: 'POST',
            data:{'id': <?php echo $id; ?>},
            dataType:'json',
            async: false,
            cache: false,
            beforeSend : function (){
              $("#resultado").fadeOut(200, function (){$("#resultado").html("<center><img border='0' src='../Public/img/loading.gif'></center>");});
              $("#resultado").fadeIn(100);
            },
            success: function (returndata) {
              console.log(returndata);
              $("#resultado").fadeOut(300, function (){$("#resultado").html(returndata);});
              $("#resultadoJson").html("");
              if(returndata[0].error==0){
                $("#nombre").val(returndata[1][0].nombre);
                $("#plataforma").val(returndata[1][0].idPlataforma);
                $("#plataforma option[value="+ returndata[1][0].idPlataforma +"]").attr("selected",true);
                $("#numero").val(returndata[1][0].numero);
                $("#serial").val(returndata[1][0].seriall);
                $("#costo").val(returndata[1][0].costo);
                $("#costoMon").val(returndata[1][0].premioMonedas);
                $("#monedasDad").val(returndata[1][0].costoMonedas);
                document.getElementById("plataforma").disabled = true;
                /*$("#plataforma option").each(function(){
                  if ($(this).val() != returndata[1][0].idPlataforma ){
                    $("#plataforma option[value="+ $(this).val() +"]").attr("disabled",true);
                    //concatValor += $(this).val()+' - '+$(this).text()+'\n';
                  }
                });*/
              }else{
                var rError=returndata[1];
                $("#resultadoJson").html(rError);
              }
            },
            error: function (){
              $("#resultado").fadeOut(200, function (){$("#resultado").html("<span class= \"error\">Ha ocurrido un error, inténtelo nuevamente</span>");});
              $("#resultado").fadeIn(100);
            }
          });
        }
        $('#consola').multiselect({
          numberDisplayed: 3,
          buttonText: function(options, select) {
            if (options.length === 0) {
              return 'Consolas';
            }else if (options.length > 3) {
              return options.length+' consolas seleccionadas';
            }else {
              var labels = [];
              options.each(function() {
                if ($(this).attr('label') !== undefined) {
                  labels.push($(this).attr('label'));
                }
                else {
                  labels.push($(this).html());
                }
              });
              return labels.join(', ') + '';
            }
          },
          enableFiltering: true,
          filterPlaceholder: 'Buscar...',
          includeSelectAllOption: true,
          selectAllText: 'Seleccionar todas',
          buttonWidth: '100%',
          maxHeight: 200,
          inheritClass: true,
        });
      });
    </script>
  </body>
</html>
