   <body>
 
 <style>
 
 /*
table.dataTable {
  width: 100%;
  margin: 0 auto;
  clear: both;
  border-collapse: separate;
  border-spacing: 0;
 
}
table.dataTable thead th,
table.dataTable tfoot th {
  font-weight: bold;
}
table.dataTable thead th,
table.dataTable thead td {
  padding: 10px 18px;
  border-bottom: 1px solid #111111;
}
table.dataTable thead th:active,
table.dataTable thead td:active {
  outline: none;
}
table.dataTable tfoot th,
table.dataTable tfoot td {
  padding: 10px 18px 6px 18px;
  border-top: 1px solid #111111;
}
table.dataTable thead .sorting,
table.dataTable thead .sorting_asc,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_asc_disabled,
table.dataTable thead .sorting_desc_disabled {
  cursor: pointer;
  *cursor: hand;
  background-repeat: no-repeat;
  background-position: center right;
}
table.dataTable thead .sorting {
  background-image: url("../images/sort_both.png");
}
table.dataTable thead .sorting_asc {
  background-image: url("../images/sort_asc.png");
}
table.dataTable thead .sorting_desc {
  background-image: url("../images/sort_desc.png");
}
table.dataTable thead .sorting_asc_disabled {
  background-image: url("../images/sort_asc_disabled.png");
}
table.dataTable thead .sorting_desc_disabled {
  background-image: url("../images/sort_desc_disabled.png");
}
table.dataTable tbody tr {
  background-color: #cc3535;
}
table.dataTable tbody tr.selected {
  background-color: #b0bed9;
}
table.dataTable tbody th,
table.dataTable tbody td {
  padding: 8px 10px;
}
table.dataTable.row-border tbody th, table.dataTable.row-border tbody td, table.dataTable.display tbody th, table.dataTable.display tbody td {
  border-top: 1px solid #3d3333;
}
table.dataTable.row-border tbody tr:first-child th,
table.dataTable.row-border tbody tr:first-child td, table.dataTable.display tbody tr:first-child th,
table.dataTable.display tbody tr:first-child td {
  border-top: none;
}
table.dataTable.cell-border tbody th, table.dataTable.cell-border tbody td {
  border-top: 1px solid #3d3333;
  border-right: 1px solid #3d3333;
}
table.dataTable.cell-border tbody tr th:first-child,
table.dataTable.cell-border tbody tr td:first-child {
  border-left: 1px solid #3d3333;
}
table.dataTable.cell-border tbody tr:first-child th,
table.dataTable.cell-border tbody tr:first-child td {
  border-top: none;
}
table.dataTable.stripe tbody tr.odd, table.dataTable.display tbody tr.odd {
  background-color: #c73434;
}
table.dataTable.stripe tbody tr.odd.selected, table.dataTable.display tbody tr.odd.selected {
  background-color: #acbad4;
}
table.dataTable.hover tbody tr:hover, table.dataTable.display tbody tr:hover {
  background-color: #c53333;
}
table.dataTable.hover tbody tr:hover.selected, table.dataTable.display tbody tr:hover.selected {
  background-color: #aab7d1;
}
table.dataTable.order-column tbody tr > .sorting_1,
table.dataTable.order-column tbody tr > .sorting_2,
table.dataTable.order-column tbody tr > .sorting_3, table.dataTable.display tbody tr > .sorting_1,
table.dataTable.display tbody tr > .sorting_2,
table.dataTable.display tbody tr > .sorting_3 {
  background-color: #c83434;
}
table.dataTable.order-column tbody tr.selected > .sorting_1,
table.dataTable.order-column tbody tr.selected > .sorting_2,
table.dataTable.order-column tbody tr.selected > .sorting_3, table.dataTable.display tbody tr.selected > .sorting_1,
table.dataTable.display tbody tr.selected > .sorting_2,
table.dataTable.display tbody tr.selected > .sorting_3 {
  background-color: #acbad5;
}
table.dataTable.display tbody tr.odd > .sorting_1, table.dataTable.order-column.stripe tbody tr.odd > .sorting_1 {
  background-color: #c13232;
}
table.dataTable.display tbody tr.odd > .sorting_2, table.dataTable.order-column.stripe tbody tr.odd > .sorting_2 {
  background-color: #c23333;
}
table.dataTable.display tbody tr.odd > .sorting_3, table.dataTable.order-column.stripe tbody tr.odd > .sorting_3 {
  background-color: #c43333;
}
table.dataTable.display tbody tr.odd.selected > .sorting_1, table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_1 {
  background-color: #a6b4cd;
}
table.dataTable.display tbody tr.odd.selected > .sorting_2, table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_2 {
  background-color: #a8b5cf;
}
table.dataTable.display tbody tr.odd.selected > .sorting_3, table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_3 {
  background-color: #a9b7d1;
}
table.dataTable.display tbody tr.even > .sorting_1, table.dataTable.order-column.stripe tbody tr.even > .sorting_1 {
  background-color: #c83434;
}
table.dataTable.display tbody tr.even > .sorting_2, table.dataTable.order-column.stripe tbody tr.even > .sorting_2 {
  background-color: #ca3434;
}
table.dataTable.display tbody tr.even > .sorting_3, table.dataTable.order-column.stripe tbody tr.even > .sorting_3 {
  background-color: #cb3535;
}
table.dataTable.display tbody tr.even.selected > .sorting_1, table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_1 {
  background-color: #acbad5;
}
table.dataTable.display tbody tr.even.selected > .sorting_2, table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_2 {
  background-color: #aebcd6;
}
table.dataTable.display tbody tr.even.selected > .sorting_3, table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_3 {
  background-color: #afbdd8;
}
table.dataTable.display tbody tr:hover > .sorting_1, table.dataTable.order-column.hover tbody tr:hover > .sorting_1 {
  background-color: #bb3131;
}
table.dataTable.display tbody tr:hover > .sorting_2, table.dataTable.order-column.hover tbody tr:hover > .sorting_2 {
  background-color: #bd3131;
}
table.dataTable.display tbody tr:hover > .sorting_3, table.dataTable.order-column.hover tbody tr:hover > .sorting_3 {
  background-color: #bf3232;
}
table.dataTable.display tbody tr:hover.selected > .sorting_1, table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_1 {
  background-color: #a2aec7;
}
table.dataTable.display tbody tr:hover.selected > .sorting_2, table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_2 {
  background-color: #a3b0c9;
}
table.dataTable.display tbody tr:hover.selected > .sorting_3, table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_3 {
  background-color: #a5b2cb;
}
table.dataTable.no-footer {
  border-bottom: 1px solid #111111;
}
table.dataTable.nowrap th, table.dataTable.nowrap td {
  white-space: nowrap;
}
table.dataTable.compact thead th,
table.dataTable.compact thead td {
  padding: 4px 17px;
}
table.dataTable.compact tfoot th,
table.dataTable.compact tfoot td {
  padding: 4px;
}
table.dataTable.compact tbody th,
table.dataTable.compact tbody td {
  padding: 4px;
}
table.dataTable th.dt-left,
table.dataTable td.dt-left {
  text-align: left;
}
table.dataTable th.dt-center,
table.dataTable td.dt-center,
table.dataTable td.dataTables_empty {
  text-align: center;
}
table.dataTable th.dt-right,
table.dataTable td.dt-right {
  text-align: right;
}
table.dataTable th.dt-justify,
table.dataTable td.dt-justify {
  text-align: justify;
}
table.dataTable th.dt-nowrap,
table.dataTable td.dt-nowrap {
  white-space: nowrap;
}
table.dataTable thead th.dt-head-left,
table.dataTable thead td.dt-head-left,
table.dataTable tfoot th.dt-head-left,
table.dataTable tfoot td.dt-head-left {
  text-align: left;
}
table.dataTable thead th.dt-head-center,
table.dataTable thead td.dt-head-center,
table.dataTable tfoot th.dt-head-center,
table.dataTable tfoot td.dt-head-center {
  text-align: center;
}
table.dataTable thead th.dt-head-right,
table.dataTable thead td.dt-head-right,
table.dataTable tfoot th.dt-head-right,
table.dataTable tfoot td.dt-head-right {
  text-align: right;
}
table.dataTable thead th.dt-head-justify,
table.dataTable thead td.dt-head-justify,
table.dataTable tfoot th.dt-head-justify,
table.dataTable tfoot td.dt-head-justify {
  text-align: justify;
}
table.dataTable thead th.dt-head-nowrap,
table.dataTable thead td.dt-head-nowrap,
table.dataTable tfoot th.dt-head-nowrap,
table.dataTable tfoot td.dt-head-nowrap {
  white-space: nowrap;
}
table.dataTable tbody th.dt-body-left,
table.dataTable tbody td.dt-body-left {
  text-align: left;
}
table.dataTable tbody th.dt-body-center,
table.dataTable tbody td.dt-body-center {
  text-align: center;
}
table.dataTable tbody th.dt-body-right,
table.dataTable tbody td.dt-body-right {
  text-align: right;
}
table.dataTable tbody th.dt-body-justify,
table.dataTable tbody td.dt-body-justify {
  text-align: justify;
}
table.dataTable tbody th.dt-body-nowrap,
table.dataTable tbody td.dt-body-nowrap {
  white-space: nowrap;
}
 
table.dataTable,
table.dataTable th,
table.dataTable td {
  box-sizing: content-box;
}
 
 
.dataTables_wrapper {
  position: relative;
  clear: both;
  *zoom: 1;
  zoom: 1;
}
.dataTables_wrapper .dataTables_length {
  float: left;
}
.dataTables_wrapper .dataTables_length select {
  border: 1px solid #aaa;
  border-radius: 3px;
  padding: 5px;
  background-color: transparent;
  padding: 4px;
}
.dataTables_wrapper .dataTables_filter {
  float: right;
  text-align: right;
}
.dataTables_wrapper .dataTables_filter input {
  border: 1px solid #aaa;
  border-radius: 3px;
  padding: 5px;
  background-color: transparent;
  margin-left: 3px;
}
.dataTables_wrapper .dataTables_info {
  clear: both;
  float: left;
  padding-top: 0.755em;
}
.dataTables_wrapper .dataTables_paginate {
  float: right;
  text-align: right;
  padding-top: 0.25em;
}
.dataTables_wrapper .dataTables_paginate .paginate_button {
  box-sizing: border-box;
  display: inline-block;
  min-width: 1.5em;
  padding: 0.5em 1em;
  margin-left: 2px;
  text-align: center;
  text-decoration: none !important;
  cursor: pointer;
  *cursor: hand;
  color: #333333 !important;
  border: 1px solid transparent;
  border-radius: 2px;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
  color: #333333 !important;
  border: 1px solid #979797;
  background-color: white;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, white), color-stop(100%, #dcdcdc));
 
  background: -webkit-linear-gradient(top, white 0%, #dcdcdc 100%);
 
  background: -moz-linear-gradient(top, white 0%, #dcdcdc 100%);
   
  background: -ms-linear-gradient(top, white 0%, #dcdcdc 100%);
 
  background: -o-linear-gradient(top, white 0%, #dcdcdc 100%);
 
  background: linear-gradient(to bottom, white 0%, #dcdcdc 100%);
 
}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
  cursor: default;
  color: #666 !important;
  border: 1px solid transparent;
  background: transparent;
  box-shadow: none;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
  color: white !important;
  border: 1px solid #111111;
  background-color: #585858;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #585858), color-stop(100%, #111111));
  
  background: -webkit-linear-gradient(top, #585858 0%, #111111 100%);
  
  background: -moz-linear-gradient(top, #585858 0%, #111111 100%);
  
  background: -ms-linear-gradient(top, #585858 0%, #111111 100%);
 
  background: -o-linear-gradient(top, #585858 0%, #111111 100%);
   
  background: linear-gradient(to bottom, #585858 0%, #111111 100%);
  
}
.dataTables_wrapper .dataTables_paginate .paginate_button:active {
  outline: none;
  background-color: #2b2b2b;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #2b2b2b), color-stop(100%, #0c0c0c));
   
  background: -webkit-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
   
  background: -moz-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
   
  background: -ms-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
  
  background: -o-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
 
  background: linear-gradient(to bottom, #2b2b2b 0%, #0c0c0c 100%);
 
  box-shadow: inset 0 0 3px #111;
}
.dataTables_wrapper .dataTables_paginate .ellipsis {
  padding: 0 1em;
}
.dataTables_wrapper .dataTables_processing {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  height: 40px;
  margin-left: -50%;
  margin-top: -25px;
  padding-top: 20px;
  text-align: center;
  font-size: 1.2em;
  background-color: white;
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(204, 53, 53, 0)), color-stop(25%, rgba(204, 53, 53, 0.9)), color-stop(75%, rgba(204, 53, 53, 0.9)), color-stop(100%, rgba(255, 255, 255, 0)));
  background: -webkit-linear-gradient(left, rgba(204, 53, 53, 0) 0%, rgba(204, 53, 53, 0.9) 25%, rgba(204, 53, 53, 0.9) 75%, rgba(204, 53, 53, 0) 100%);
  background: -moz-linear-gradient(left, rgba(204, 53, 53, 0) 0%, rgba(204, 53, 53, 0.9) 25%, rgba(204, 53, 53, 0.9) 75%, rgba(204, 53, 53, 0) 100%);
  background: -ms-linear-gradient(left, rgba(204, 53, 53, 0) 0%, rgba(204, 53, 53, 0.9) 25%, rgba(204, 53, 53, 0.9) 75%, rgba(204, 53, 53, 0) 100%);
  background: -o-linear-gradient(left, rgba(204, 53, 53, 0) 0%, rgba(204, 53, 53, 0.9) 25%, rgba(204, 53, 53, 0.9) 75%, rgba(204, 53, 53, 0) 100%);
  background: linear-gradient(to right, rgba(204, 53, 53, 0) 0%, rgba(204, 53, 53, 0.9) 25%, rgba(204, 53, 53, 0.9) 75%, rgba(204, 53, 53, 0) 100%);
}
.dataTables_wrapper .dataTables_length,
.dataTables_wrapper .dataTables_filter,
.dataTables_wrapper .dataTables_info,
.dataTables_wrapper .dataTables_processing,
.dataTables_wrapper .dataTables_paginate {
  color: #333333;
}
.dataTables_wrapper .dataTables_scroll {
  clear: both;
}
.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody {
  *margin-top: -1px;
  -webkit-overflow-scrolling: touch;
}
.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > thead > tr > th, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > thead > tr > td, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > tbody > tr > th, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > tbody > tr > td {
  vertical-align: middle;
}
.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > thead > tr > th > div.dataTables_sizing,
.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > thead > tr > td > div.dataTables_sizing, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > tbody > tr > th > div.dataTables_sizing,
.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > tbody > tr > td > div.dataTables_sizing {
  height: 0;
  overflow: hidden;
  margin: 0 !important;
  padding: 0 !important;
}
.dataTables_wrapper.no-footer .dataTables_scrollBody {
  border-bottom: 1px solid #111111;
}
.dataTables_wrapper.no-footer div.dataTables_scrollHead table.dataTable,
.dataTables_wrapper.no-footer div.dataTables_scrollBody > table {
  border-bottom: none;
}
.dataTables_wrapper:after {
  visibility: hidden;
  display: block;
  content: "";
  clear: both;
  height: 0;
}
 
@media screen and (max-width: 767px) {
  .dataTables_wrapper .dataTables_info,
.dataTables_wrapper .dataTables_paginate {
    float: none;
    text-align: center;
  }
  .dataTables_wrapper .dataTables_paginate {
    margin-top: 0.5em;
  }
}
@media screen and (max-width: 640px) {
  .dataTables_wrapper .dataTables_length,
.dataTables_wrapper .dataTables_filter {
    float: none;
    text-align: center;
  }
  .dataTables_wrapper .dataTables_filter {
    margin-top: 0.5em;
  }
}
 */
 
 </style>
 
 
 
  <script>
    $(document).ready(function () {
     consulta_central();
   //  alert("alerta de prueba consulta pedidos");
   consulta_punto_venta_pedido();
   consulta_punto_venta_pedido_facturado();
   
   

   
   setInterval(consulta_central, 30000);
 $('#myTab a[href="#profile"]').tab('show')
    });
 
 </script>
 
 
 
 
 
 <input type="hidden" value="" id="" class="hola">
 
 <input type="hidden" id="cont_horas_margen" value="6">
 <div class="hola"></div>
<div class="hola"></div>
<div class="hola"></div>
<div class="hola"></div>
<div class="hola"></div>
<div class="hola"></div>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Consulta de Pedidos </h1>

    <ol class="breadcrumb">
      
      <li><a href="Central.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administracion de Pedidos</li>
    
    </ol>

  </section>

  <section class="content">
 
   
  
    <div class="box">

 
      <div class="box-header with-border">
  
           <div class="form-row">
             
           
          </div>



  
 </div>
 
        
      <div class="box-header with-border">
  
           <div class="form-row">
          
            <div class="form-group col-md-4" align="left"> 
                              
            </div>
          
          </div>



  
 </div>
 
 
 
 
                                <script>
                                
                                $(function() {
                                  $('input[name="fecha"]').daterangepicker({
                                   // dateFormat: 'YYYY-MM-DD',
								    singleDatePicker: true,
                                    showDropdowns: true,
					
                                     locale: {
                                  format: 'YYYYMMDD'
                                } ,  
                                         			
                                    minYear: 1901 ,
                                    maxYear: parseInt(moment().format('YYYY'),10) 
                                  });
                                });
                                
                                
                           
                                </script>
          
       <button class="btn btn-primary" onClick="consulta_central()" >
          Consultar
         

        </button>
    
    
  
    <p>&nbsp;</p>
      
      
      
      <ul class="nav nav-tabs" id="myTab" role="tablist">
 <!-- <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>-->
  
  <li class="nav-item">
    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Pendientes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Facturados</a>
  </li>
 
  
  
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  
        
  
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> <table class="table table-bordered table-striped dt-responsive" width="100%" id="tablet_consolidado_i">
         
        <thead>
         
           <tr>
           <th ><h4 class="display-3"><b>Acciones</b></h4></th> 
           <th><h4 class="display-3"><b>Numero Pedido</b></h4></th>
           <th  ><h4 class="display-3"><b>Fecha </b></h4></th>
            
            <th><h4 class="display-3"><b>Valor Total</b></h4></th>
            <th><h4 class="display-3"><b>Codigo Cliente</b></h4></th>
           <th><h4 class="display-3"><b>Nombre Cliente</b></h4></th>
           <th><h4 class="display-3"><b>Punto de Venta  Pedido</b></h4></th>
         </tr> 

        </thead>      

       </table>
        </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><table class="table table-bordered table-striped dt-responsive" width="100%" id="tabla_pedidos_fact">
         
        <thead>
         
           <tr>
           
           <th  ><h4 class="display-3">Acciones </h4></th>
            
            <th><h4 class="display-3">Numero Pedido</h4></th>
           <th><h4 class="display-3">Fecha Pedido</h4></th>
            <th><h4 class="display-3">Fecha Factura</h4></th>
             <th><h4 class="display-3">Valor Total</h4></th>
             <th><h4 class="display-3">Codigo Cliente</h4></th>
              <th><h4 class="display-3">Nombre Cliente</h4></th>
                <th><h4 class="display-3">Numero de Factura</h4></th>
              <th><h4 class="display-3">Punto de Venta  Pedido</h4></th >
              <th><h4 class="display-3">Tiempo de Respuesta(Minutos)</h4></th >
              
              </tr> 

        </thead>      

       </table></div>
    
  
</div>
      
      
      
      
      
      
      
      
      
      
      
      
       
      
      
      
      
      
      
 
      
      
      
         
      
      
      
      
      
      
      
      
      
      
      
      
      
  
      
      
      
      
      
<div class="box-header with-border">
  
           <div class="form-row">
       
           
 
          
          
            
            
          </div>



  
 </div>

       
  
        
    

      <div class="box-body">
        
        
        <div id="contenedor_consulta">
          <legend> </legend></div>
        
 

      </div>

    </div>

  </section>
  </div>
</div>  

<!---Editar prueba adjunto---><!--=====================================
MODAL Estado Horas
======================================-->





<!---modal detalle MODAL--->


<!---fin modal detalle MODAL--->





<div id="modalEditarEstado" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">  Estado de Hora</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
                <label for="inputZip">Cantidad de Horas</label>
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-houzz"></i></span> 
 <select name="cantidad_horas" id="cantidad_horas" class="form-control  " onChange=" "  >
      <option value="">- Seleccione -</option>
      <option value="1"> 1 </option>     
      <option value="2"> 2 </option>     
      <option value="3"> 3 </option>       
      <option value="4"> 4 </option>      
      <option value="5"> 5 </option>      
      <option value="6"> 6 </option>      
      <option value="7"> 7 </option>      
      <option value="8"> 8 </option>      
      <option value="9"> 9 </option>                                            
          </select>
          
          
              </div>

            </div>

      

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="button" onClick="modificacion_horas_estado_argen()" class="btn btn-primary">Modificar </button>


 
        </div>
 
      

    </div>

  </div>

</div>




<div id="modaladescripcionpedido" class="modal fade" role="dialog">
  
  <div class="modal-dialog modal-lg">

    <div class="modal-content">

   

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
<input type="hidden" value="insert" id="valor_control" name="valor_control">
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Detalle de Pedido</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


          

			<!--- ENTRADA DE NOMBRE--><!--- ENTRADA DE CORREO--><!--- ENTRADA DE EXTENCION--><!--- ENTRADA DE CELULAR--><!--- ENTRADA DE Fecha nacimiento--><!--- ENTRADA DE CARGO--><!--- ENTRADA DE AREA--><!--- ENTRADA DE CIUDAD--><!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
               

            
<div id="contenedor_consulta">


   <div id="bloque_formulario_pedido" style="display:block">
         
               
                 
            
                
                
                
               <!---seccion lateral --> 
               
             <div class="row">
          
           
          
               <div class="box-header with-border">
            <div class="form-group col-md-8">
               <legend style="background-color:#3C8DBC;color:#FFF">Datos Basicos del Pedido</legend> 
            </div> 
<!---
           <div class="form-group col-md-3">
                  &nbsp;    

                </div>

 

                <div class="form-group col-md-3">
                    &nbsp;    

                </div>
--> 
            <div class="form-group col-md-4">
            
           
             <label for="inputZip"> Factura Electronica </label> 
             
      
             <input type="checkbox" id="check_fac_electronica" value="1" readonly="readonly"  onclick="javascript: return false;"/>
    
            </div>
            </div>
            

           </div> 
               <!---fin seccion lateral --> 
          <div class="row">
          
          
          
               <div class="box-header with-border">
            <div class="form-group col-md-2">
                     <label for="inputZip"># Pedido</label>     
                    <div class="input-group">
                          
                    <input type="text" class="form-control input-lg" id="numero_pedido"  placeholder="numero de pedido " onKeyUp="llamado_por_cedula3()" readonly>
                    <input type="hidden" id="cod_cliente" value="">
                    </div></div> 

  

               <div class="form-group col-md-3">
                    <label for="inputZip"> Fecha de Pedido</label>            

                   <!-- <div class="input-group col-md-5">-->
  <input type="text" class="form-control input-lg" id="fecha_pedido" name="fecha_pedido" placeholder="Fecha de Pedido" readonly>
                 <!--  </div>-->

                </div>



 




                <div class="form-group col-md-3">
                    <label for="inputZip"> Identificacion del Cliente</label>            

                    <div class="input-group">

  <input type="text" class="form-control input-lg" id="identificacion_cliente" name="identificacion_cliente" placeholder="Identificacion del cliente" readonly>

 
                    </div>

                </div>

 <div class="form-group col-md-4">
                    <label for="inputZip"> Nombre Cliente</label>            

                 <!--   <div class="input-group">-->

  <input type="text" class="form-control input-lg" id="nombre_cliente" name="nombre_cliente" placeholder="nombre cliente" readonly>

 
                    <!-- </div>-->









            </div>
            </div>
            

            
            
             
            
         
         
         
           <div class="row">

              <div class="box-header with-border">




                <div class="form-group col-md-3">
                    <label for="inputZip"> Identificacion del Vendedor</label>            

                    <div class="input-group">

  <input type="text" class="form-control input-lg" id="identificacion_vendedor" name="identificacion_vendedor" placeholder="ide vendedor" readonly>

 
                    </div>

                </div>
                  
                    <div class="form-group col-md-4">
                    <label for="inputZip"> Nombre Vendedor</label>            

                    <!--<div class="input-group">-->

  <input type="text" class="form-control input-lg" id="nombre_vendedor" name="nombre_vendedor" placeholder="Nombre Vendedor" readonly>

 
                    </div>
                  
                   
                    <div class="form-group col-md-4">
                        <label for="inputState"> Notas  </label>
            <textarea class="form-control input-lg" id="notas" rows="3" readonly></textarea>
 
                    </div>
                  

                </div>

            </div>    
          
          
          
             <div class="row">

              <div class="box-header with-border">




                <div class="form-group col-md-3">
                    <label for="inputZip"> Forma de Pago</label>            

                    <div class="input-group">

  <input type="text" class="form-control input-lg" id="forma_pago" name="forma_pago" placeholder="forma de pago" readonly>

 
                    </div>

                </div>
                  
                    <div class="form-group col-md-4">
                    <label for="inputZip"> Forma de Entrega</label>            

                    <!--<div class="input-group">-->

  <input type="text" class="form-control input-lg" id="forma_entrega" name="forma_entrega" placeholder="Forma de Entrega" readonly>

 
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputZip"> Punto de Venta</label>            

                    <!--<div class="input-group">-->

  <input type="text" class="form-control input-lg" id="punto_venta_pedido" name="punto_venta_pedido" placeholder="Punto de Venta" readonly>

 
                    </div>
                   
                    

                </div>

            </div>    
          
          
          
          </div> 
            
         
         
         
         
         
         
            
            
                
              
                
                     

               </div> 
            


 
            <legend style="background-color:#3C8DBC;color:#FFF">Detalle del Pedido</legend>

      <div id="conten_tabla">           
        <table class="table table-bordered table-striped dt-responsive tablacarrito" width="100%" id="tabladetalle">

        <thead>
         
           <tr>
           <!--<th>ACCIONES</th>
            <th><h4 class="display-4">OPC</h4></th>-->
           <th><h4 class="display-4">CODIGO PRODUCTO</h4></th>
           <th><h4 class="display-4">NOMBRE </h4></th>
            <th><h4 class="display-4" >  PRECIO PRODUCTO</h4></th>
           <th><h4 class="display-4">  CANTIDAD</h4></th>
            <th><h4 class="display-4">  VALOR TOTAL</h4></th>
           
           
         </tr> 

        </thead>      

       </table>
        </div>
        
        
        
        
             
     
            
              <label for="inputZip"> Valor del Pedido</label> 
        
        <div class="input-group  col-md-5">




                        <span class="input-group-addon">
                            <div>
                               
  
            <button class="btn btn-default"   id="buttone2" >

                                  <i class="fa fa-usd" aria-hidden="true"></i>
                                </button>
                            </div>
  						</span> 



                        <input type="text" class="form-control input-lg" id="valor_pedido" name="valor_pedido" placeholder="Valor del pedido" readonly>




                    </div>
        
        
        
        
        <!--
           <div class="form-group col-md-3">
              
              <label for="inputState"><h4 class="display-3">Valor Productos  </h4></label>
                <input type="text" class="form-control input-lg" id="productos_seleccionados" name="productos_seleccionados" placeholder="productos_seleccionados " >
    
            </div>-->
            
             
            
            
            
            
            
            
                        <!--inicio formulario-->
            
            
      
            
            
            <!--inicio formulario-->
            
            <div id="bloque_botones" style="display:bloc">
            
             <button class="btn btn-primary" onClick="facturaformon()" id="fac_on" >
           <i class="fa fa-search" aria-hidden="true"></i>
       Factura pos

  </button>
  
    <button class="btn btn-primary" onClick="facturaformoff()" id="fac_off" style="display:none">
           <i class="fa fa-search" aria-hidden="true"></i>
       Factura pos

  </button>
  
  
   

    
  
  
  
            </div>
                  <p>&nbsp;</p>
            
            <div id="bloque_formulario_factura" style="display:none">
             
               
                           <legend style="background-color:#3C8DBC;color:#FFF">Datos de Factura</legend>
             <div class="row">
               
               <div class="box-header with-border">


                   <div class="form-group col-md-8">
                    <label for="inputZip"> Punto de Venta</label>            

                    <div class="input-group col-md-8">

  <select name="punto_venta" id="punto_venta" class="form-control  " onChange=" "  >
                                                        <option value="">- Seleccione -</option>
                                                    </select>
 
                    </div>

                </div>

        </div>    </div>
        
        
        
            
           <div class="row">

              <div class="box-header with-border">




                <div class="form-group col-md-3">
                    <label for="inputZip"> Prefijo</label>            

                    <div class="input-group">

  <input type="text" class="form-control input-lg" id="prefijo" name="prefijo" placeholder="prefijo" >

 
                    </div>
 

                </div>
                  
                    <div class="form-group col-md-3">
                    <label for="inputZip"> Numero de Factura</label>            

                    <div class="input-group">

  <input type="text" class="form-control input-lg" id="numero_factura" name="numero_factura" placeholder="Numero de Factura" >

 
                    </div>

                </div>

            </div>    </div> 
            
         
        
         
             
            

              </div> 
            
           
            
            
            <!--Fin formulario-->
            
            
          
            
            
            
       
        </div>
            </div>

          </div>

        </div> 
        
        
       
             

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
 
  
    <button class="btn btn-primary" onClick="modificar_adicion_factura_pedido()" id="bot_fac_on" style="display:none">
           <i class="fa fa-floppy-o" aria-hidden="true"></i>
       Guardar Factura pos

  </button>
 
 <div id="div_button_guarda_cli_ven" style="display:none">     <button type="button" class="btn btn-default pull-left" id="button_guarda_cli_ven" onClick="registrar_cliente()"  > Guardar  </button></div>
 <div id="div_button_update_cli_ven" style="display:none" >     <button type="button" class="btn btn-default pull-left" id="button_update_cli_ven" onClick="actualizar_cliente()" > Actualizar</button>
 </div>
 
  
 <button class="btn btn-primary" onClick="generar_pdf_factura_tiket_ped()" >
 Exportar a Tiket 
</button>
  
 <button class="btn btn-primary" onClick="generar_pdf_factura_factura_ped()" >
 Exportar PDF
</button>
 
 
          
       
        </div>

     

     
     
     
    <!---Sub contenedor --></div>

  </div>

</div>
</div>



<!--=====================================
MODAL  
======================================--><!--=====================================
MODAL EDITAR PRODUCTO
======================================-->
 

<div id="modaladfacturado" class="modal fade" role="dialog">
  
  <div class="modal-dialog modal-lg">

    <div class="modal-content">

   

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
<input type="hidden" value="insert" id="valor_control" name="valor_control">
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Detalle de Pedido Facturado</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


          

			<!--- ENTRADA DE NOMBRE--><!--- ENTRADA DE CORREO--><!--- ENTRADA DE EXTENCION--><!--- ENTRADA DE CELULAR--><!--- ENTRADA DE Fecha nacimiento--><!--- ENTRADA DE CARGO--><!--- ENTRADA DE AREA--><!--- ENTRADA DE CIUDAD--><!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
               

            
<div id="contenedor_consulta">


   <div id="bloque_formulario_pedido" style="display:bloc">
             
  
 
 
 
 
              <div class="row">
          
           
          
               <div class="box-header with-border">
            <div class="form-group col-md-8">
               <legend style="background-color:#3C8DBC;color:#FFF">Datos Basicos del Pedido</legend> 
            </div> 
 
            <div class="form-group col-md-4">
            
           
             <label for="inputZip"> Factura Electronica </label> 
             
      
             <input type="checkbox" id="check_fac_electronica_fac" value="1" readonly="readonly"  onclick="javascript: return false;"/>
    
            </div>
            </div>
            

           </div> 
 
 
 
          <div class="row">
               <div class="box-header with-border">
            <div class="form-group col-md-2">
                     <label for="inputZip"># Pedido</label>     
                    <div class="input-group">
                          
                    <input type="text" class="form-control input-lg" id="numero_pedido_fac"  placeholder="numero de pedido "   readonly>
                    <input type="hidden" id="cod_cliente" value="">
                    </div></div> 

  

               <div class="form-group col-md-3">
                    <label for="inputZip"> Fecha de Pedido</label>            

                    <!--<div class="input-group">-->
  <input type="text" class="form-control input-lg" id="fecha_pedido_fac" name="fecha_pedido" placeholder="Fecha de Pedido" readonly>
                 <!--  </div>-->

                </div>



 




                <div class="form-group col-md-3">
                    <label for="inputZip"> Identificacion del Cliente</label>            

                    <div class="input-group">

  <input type="text" class="form-control input-lg" id="identificacion_cliente_fac" name="identificacion_cliente" placeholder="Identificacion del cliente" readonly>

 
                    </div>

                </div>

 <div class="form-group col-md-4">
                    <label for="inputZip"> Nombre Cliente</label>            

                   <!-- <div class="input-group">-->

  <input type="text" class="form-control input-lg" id="nombre_cliente_fac" name="nombre_cliente" placeholder="nombre cliente" readonly>

 
                 <!--   </div>-->









            </div>
            </div>
            

            
            
             
            
         
         
         
           <div class="row">

              <div class="box-header with-border">




                <div class="form-group col-md-3">
                    <label for="inputZip"> Identificacion del Vendedor</label>            

                    <div class="input-group">

  <input type="text" class="form-control input-lg" id="identificacion_vendedor_fac" name="identificacion_vendedor" placeholder="ide vendedor" readonly>

 
                    </div>

                </div>
                  
                    <div class="form-group col-md-5">
                    <label for="inputZip"> Nombre Vendedor</label>            

                  <!--  <div class="input-group">-->

  <input type="text" class="form-control input-lg" id="nombre_vendedor_fac" name="nombre_vendedor" placeholder="Nombre Vendedor" readonly>

 
                  <!--  </div>-->

                </div>
                
                
                
                <div class="form-group col-md-4">
                        <label for="inputState"> Notas  </label>
            <textarea class="form-control input-lg" id="notas_facturadas" rows="3" readonly></textarea>
 
                    </div>
                

            </div>    </div> 
            
         
         <!---entrada condiciones nuevas etiquetas-->
         
                      <div class="row">

              <div class="box-header with-border">




                <div class="form-group col-md-3">
                    <label for="inputZip"> Forma de Pago</label>            

                    <div class="input-group">

  <input type="text" class="form-control input-lg" id="forma_pago_fac" name="forma_pago_fac" placeholder="forma de pago" readonly>

 
                    </div>

                </div>
                  
                    <div class="form-group col-md-4">
                    <label for="inputZip"> Forma de Entrega</label>            

                    <!--<div class="input-group">-->

  <input type="text" class="form-control input-lg" id="forma_entrega_fac" name="forma_entrega" placeholder="Nombre Vendedor" readonly>

 
                    </div>
                     <div class="form-group col-md-4">
                    <label for="inputZip"> Punto de Venta</label>            

                    <!--<div class="input-group">-->

  <input type="text" class="form-control input-lg" id="punto_venta_pedido_fac" name="punto_venta_pedido_fac" placeholder="Punto de Venta" readonly>

 
                    </div>
                   
                    

                </div>

            </div>    
          
         
         
            
            
                
              
                
                     

               </div> 
            


 


 <legend style="background-color:#3C8DBC;color:#FFF">Datos Detalle del Pedido</legend>
 

      <div id="conten_tabla">           
        <table class="table table-bordered table-striped dt-responsive tablacarrito" width="100%" id="tabladetalle_fac">

        <thead>
         
           <tr>
           <!--<th>ACCIONES</th>
            <th><h4 class="display-4">OPC</h4></th>-->
           <th><h4 class="display-4">CODIGO PRODUCTO</h4></th>
           <th><h4 class="display-4">NOMBRE </h4></th>
            <th><h4 class="display-4" >  PRECIO PRODUCTO</h4></th>
           <th><h4 class="display-4">  CANTIDAD</h4></th>
            <th><h4 class="display-4">  VALOR TOTAL</h4></th>
           
           
         </tr> 

        </thead>      

       </table>
        </div>
        
        
        
           <label for="inputZip"> Valor del Pedido</label> 
        
        <div class="input-group  col-md-5">




                        <span class="input-group-addon">
                            <div>
                               
  
            <button class="btn btn-default"   id="buttone2" >

                                  <i class="fa fa-usd" aria-hidden="true"></i>
                                </button>
                            </div>
  						</span> 



  <input type="text" class="form-control input-lg" id="valor_pedido_fac" name="valor_pedido" placeholder="Valor del pedido" readonly>



                    </div>
         
       
       
       
        
        <!--
           <div class="form-group col-md-3">
              
              <label for="inputState"><h4 class="display-3">Valor Productos  </h4></label>
                <input type="text" class="form-control input-lg" id="productos_seleccionados" name="productos_seleccionados" placeholder="productos_seleccionados " >
    
            </div>-->
            
             
            
            
            
            
            
            
                        <!--inicio formulario-->
            
            
            
            
            
            <!--inicio formulario-->
            
         <p>&nbsp;</p>
            
            <div id="bloque_formulario_factura" style="display:block">
             
               
                <legend style="background-color:#3C8DBC;color:#FFF">Datos de Factura</legend>
               
             <div class="row">
               
               <div class="box-header with-border">


                   <div class="form-group col-md-8">
                    <label for="inputZip"> Punto de Venta</label>            

                    <div class="input-group col-md-8">

  <select name="punto_venta" id="punto_venta_fac" class="form-control  " onChange=" "  readonly>
                                                        <option value="">- Seleccione -</option>
                                                    </select>
 
                    </div>

                </div>

        </div>    </div>
        
        
        
            
           <div class="row">

              <div class="box-header with-border">




                <div class="form-group col-md-3">
                    <label for="inputZip"> Prefijo</label>            

                    <div class="input-group">

  <input type="text" class="form-control input-lg" id="prefijo_fac" name="prefijo" placeholder="prefijo" readonly>

 
                    </div>
 

                </div>
                  
                    <div class="form-group col-md-3">
                    <label for="inputZip"> Numero de Factura</label>            

                    <div class="input-group">

  <input type="text" class="form-control input-lg" id="numero_factura_fac" name="numero_factura" placeholder="Numero de Factura" readonly>

 
                    </div>

                </div>

            </div>    </div> 
            
         
        
         
             
            

              </div> 
            
           
            
            
            <!--Fin formulario-->
            
            
          
            
            
            
       
        </div>
            </div>

          </div>

        </div> 
        
        
       
             

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
 
  
    <button class="btn btn-primary" onClick="modificar_adicion_factura_pedido()" id="bot_fac_on" style="display:none">
           <i class="fa fa-floppy-o" aria-hidden="true"></i>
       Guardar Factura

  </button>
 
 <div id="div_button_guarda_cli_ven" style="display:none">     <button type="button" class="btn btn-default pull-left" id="button_guarda_cli_ven" onClick="registrar_cliente()"  > Guardar  </button></div>
 <div id="div_button_update_cli_ven" style="display:none" >     <button type="button" class="btn btn-default pull-left" id="button_update_cli_ven" onClick="actualizar_cliente()" > Actualizar</button>
 </div>
 
 
<button class="btn btn-primary" onClick="generar_pdf_factura_tiket()" >
 Exportar a Tiket 
</button>
  
 <button class="btn btn-primary" onClick="generar_pdf_factura_factura()" >
 Exportar PDF
</button>
 
    
        </div>

     

     
     
     
    <!---Sub contenedor --></div>

  </div>

</div>

</div>
