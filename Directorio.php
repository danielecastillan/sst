 
<?php
//session_start();
//$usuario =$_SESSION["usuario"];
// var_dump($usuario);
  //$pvt= $_GET['pvt'];
 
	 
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




</head>

<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body class="  login-page">
 
 
<header class="main-header"  >
 	
	<!--=====================================
	LOGOTIPO
	======================================-->
  
	<!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
 

 </header>
<div class="content-wrapper">

  <section class="content-header">
    <center>  <h1>
      
      DIRECTORIO DE PRODUCTOS</h1>
 </center>
 
     <div id="contenedor_div_principal">
     
     </div>
      <div class="box-header with-border">
      <div class="form-group col-md-3">&nbsp;</div>
      
      
      
      
      <div id="factura" class="form-group col-md-6" style="display:block">
     <!--  <table class="table table-bordered table-striped dt-responsive"  width="100%" id="tablafacturaretorno">
         
        <thead>
        <tr><th rowspan="3" bgcolor="#FF0000"><img width="150" height="150" src="img/dafault.png" class="header-logo-dark" alt="Imagen Predeterminada"></th></tr>   
           <tr>
           <th  bgcolor="#FFFFFF"> CODIGO : 7707303940387</th>
           <th  bgcolor="#FFCC00"> PRECIO : 3.700.900 </th>
           <th  bgcolor="#FFCC00"> Cantidad : 3.700.900 </th>
         </tr> 

		 <tr>
           <th colspan="3"  bgcolor="#CC6699"> NOMBRE :cama hospitalaria electrica de tres movimientos tendidos plasticos barandas plasticas </th>
           
           
         </tr> 

        </thead>      

       </table>--></div>
      <div class="form-group col-md-1"    >&nbsp;  </div>
        <div class="form-group col-md-2" id="vid_canti" style="display:none;">
        <span>  <button class='btn btn-light btn-lg'       style="background-color:#FFFFFF""><i class="fa fa-building-o"></i><div id="can_div">4</div></button></span></div>
      
      
      
      </div>
        <div class="box-header with-border">
      <div class="form-group col-md-5">&nbsp; </div>
       <div class="form-group col-md-5">&nbsp; </div>
        <div class="form-group col-md-2">      
   
  
   
    </div>
      </div>
      
  </section>

  <section class="content">
<center>
    <div class="row">
        
     

    </div> 
</center>
<div id="session_prueba">  </div>

  </section>
 
</div>
<footer class="main-footer">
	
	<strong>LH : Lineas Hospitalarias - TICS.</strong>
<input type="hidden" id="valor_hdn" value="0">
	<input type="hidden" id="hdn_punto_venta" value="<?php echo $pvt;?>"> 

</footer>
 






<script src="js/plantilla.js"></script>

<script src="js/funciones_basicas.js"></script> 
<script src="lib/factanti/js/fact_anti.js"></script>

<script src="lib/Dirproduct/js/dirproduct_funcions.js"></script>

<!--- 
<script src="vistas/js/usuarios.js"></script>
<script src="vistas/js/categorias.js"></script>
<script src="vistas/js/productos.js"></script>
<script src="vistas/js/clientes.js"></script>
<script src="vistas/js/ventas.js"></script>
<script src="vistas/js/reportes.js"></script>

--->

</body>
</html>
 
<script>
    $(document).ready(function () {
 llamado_directorio_producto_externo();
   });
 
</script> 