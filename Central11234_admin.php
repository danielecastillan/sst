 
<?php
require_once 'lib/Menu/controladores/menu.controlador_1.php';
//require_once 'lib/Menu/modelos/menu.modelo_1.php';

session_start();
//$usuario =$_SESSION["usuario"];
// var_dump($usuario);
  
//if ($usuario != NULL || $usuario != '') {
	
	 
    ?>

  
  
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>C Y M WEB</title>

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
  <style type="text/css">
  body,td,th {
	font-family: "Source Sans Pro", "Helvetica Neue", Helvetica, Arial, sans-serif;
}
body {
	background-color: #343a40;
}
  a:link {
	color: #343a40;
}
  </style>

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
 <script>
    $(document).ready(function () {
     
    
   
  //llamado_menu_general(<?php echo $_SESSION["id_perfil"];?>);
  // llamado_menu_generalcurso(<?php echo $_SESSION["id_perfil"];?>);
   llamado_menu_general(<?php echo $_SESSION["id_perfil"];?>);
    });
 
 </script>
<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
 
 
<header class="main-header" style="background-color:#2c3b41">
 	
	<!--=====================================
	LOGOTIPO
	======================================-->
    <a   class="logo" style="background-color:#2c3b41">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">O</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" >OPERACIONES</span>
    </a>

	<!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
	<nav class="navbar navbar-static-top" style="background-color:#2c3b41" role="navigation">
		
		<!-- Botón de navegación -->

	 	<a href="#" class="sidebar-toggle" data-toggle="push-menu" style="background-color:#222d32" role="button">
        	
        	<span class="sr-only">Toggle navigation</span>
      	
      	</a>

		<!-- perfil de usuario -->

		<div class="navbar-custom-menu">
				
			<ul class="nav navbar-nav">
				
				<li class="dropdown user user-menu">
					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

					<?php
/*
					if($_SESSION["foto"] != ""){

						//echo '<img src="'.$_SESSION["foto"].'" class="user-image">';

					}else{


					//	echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';

					}*/

echo '<img src="img/usuario.png" class="user-image">';
					?>
						
					<!--	<span class="hidden-xs"><?php // echo $_SESSION["nombre"]; ?></span>-->

					</a>

					<!-- Dropdown-toggle -->

					<ul class="dropdown-menu">
						
                                            <li class="user-body">
                                                 
                                                
                                                
							<div class="pull-right">
								
								<a  onclick="cambio_clave()" class="btn btn-default btn-flat">Cambiar Clave</a>
                                                                <a href="salir.php" class="btn btn-default btn-flat">Salir</a>

							</div>

						</li>
                                            
                                            
					 
                                                
                                                

					</ul>

				</li>

			</ul>

		</div>

	</nav>

 </header>
 <div id="div_con_menu"></div>
 

 <div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Plataforma de C y M</h1>

     
  </section>

  <section class="content">

    <div class="row">
        <div id="contenedor_div_principal"></div>
     

    </div> 

     <div class="row">
       
        <div class="col-lg-12">

         

        </div>

        <div class="col-lg-6">

         

        </div>

         <div class="col-lg-6">

          

        </div>

        

     </div>
     
     <div id="session_prueba">  </div>

  </section>
 
</div>
<footer class="main-footer">
	
	<strong>C Y M Gestion Web</strong>

	 

</footer>
 





<script src="js/plantilla.js"></script>
<script src="lib/Usuario/js/users.js"></script>
<script src="js/funciones_basicas_index.js"></script>
<script src="lib/productos/js/prod_funcions.js"></script>
<script src="lib/productos/js/pedidos_funcions.js"></script>
<script src="lib/factanti/js/fact_anti.js"></script>
<script src="lib/Menu/js/menu_p_funcions.js"></script>

<script src="lib/AdmCursos/js/adm_cursos_funcions.js"></script>

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

    <?php
	 /*
} else {
    header('Location: index.php');
}
 */

?>
  <script>
    $(document).ready(function () {
     
 
   
 
   llamado_menu_general_det(1);
    
    });
 
 </script>