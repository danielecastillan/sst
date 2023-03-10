<?php
session_start();
$usuario =$_SESSION["usuario"];
$id_perfil =$_SESSION["id_perfil"];
$id_user =$_SESSION["id"];



if ($usuario != NULL || $usuario != '') {
?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>SIS consultas</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="img/plantilla/lineasazulico.png">

   <!--=====================================
  PLUGINS DE CSS
  ======================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">

   <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">

  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

  <!-- SweetAlert 2 -->
  <script src="plugins/sweetalert2/sweetalert2.all.js"></script>
   <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
-->
  <!-- iCheck 1.0.1 -->
  <script src="plugins/iCheck/icheck.min.js"></script>

  <!-- InputMask -->
  <script src="plugins/input-mask/jquery.inputmask.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

  <!-- jQuery Number -->
  <script src="plugins/jqueryNumber/jquerynumber.min.js"></script>

  <!-- daterangepicker http://www.daterangepicker.com/-->
  <script src="bower_components/moment/min/moment.min.js"></script>
  <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
  <script src="bower_components/raphael/raphael.min.js"></script>
  <script src="bower_components/morris.js/morris.min.js"></script>

  <!-- ChartJS http://www.chartjs.org/-->
  <script src="bower_components/Chart.js/Chart.js"></script>

 <script>
    $(document).ready(function () {
     
      consulta_combo_cursos(<?php echo $id_user;?>); 
   
  //llamado_menu_general(<?php echo $id_user;?>);
  // llamado_menu_generalcurso(<?php echo $_SESSION["id_perfil"];?>);
  
    });
 
 </script>
<!--========


</head>

<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
 
   

<div id="back"></div>

<div class="login-box">
  
  

  
  <div class="login-logo">

    <img width="421" height="99" src="http://lineashospitalarias.com/wp-content/uploads/2020/06/lineasblanco@4x.png" class="header-logo-dark" alt="Lineas Hospitalarias">




 
  </div>

  <div class="login-box-body">

    <p class="login-box-msg">Seleccione El Curso a Ingresar</p>
<form method="POST" id="frm_login" action="<?php echo htmlspecialchars(strip_tags('lib/Usuario/controladores/UsuarioController.php'));?>">
   

      <div class="form-group has-feedback">

       <select name="curso" id="curso" class="form-control  " onChange=" "  >
      <option value="">- Seleccione -</option>
      <option value="c1"> Curso uno </option>     
      <option value="c2"> Curso dos </option>     
      <option value="c3"> Curso tres </option>                                             
        </select>
          
         

      </div>

   
      <div class="row">
       
        <div class="col-xs-4">

        
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>

      </div>

    
<input type="hidden" value="LogSelector" name="opcion"   id="opcion"/>
    </form>

  </div>

</div>


<!--- 
<script src="vistas/js/usuarios.js"></script>
<script src="vistas/js/categorias.js"></script>
<script src="vistas/js/productos.js"></script>
<script src="vistas/js/clientes.js"></script>
<script src="vistas/js/ventas.js"></script>
<script src="vistas/js/reportes.js"></script>

--->

</body>

<script src="js/plantilla.js"></script>

<script src="js/funciones_basicas.js"></script>
</html>
    <?php
	 
} else {
    header('Location: index.php');
}
 

?>
 