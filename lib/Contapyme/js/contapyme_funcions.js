
function consulta_list_contapyme(){
   
 
 //alert("entro");
 
 
 var vari_consulta = $("#vari_consulta").val();
 /*
  var contador = 0;
  
  
  var HOR_NUME = $("#HOR_NUME").val();
  var nombre_empleado = $("#nombre_empleado").val();
 
 var NUM_ORDEN = $("#NUM_ORDEN").val();
  
 
  var n_HOR_NUME=HOR_NUME.length;
  var n_nombre_empleado=nombre_empleado.length;
 
 var NUM_ORDEN=NUM_ORDEN.length;
    
  if(n_HOR_NUME>0 && n_nombre_empleado==0  ){
      contador=1
  }else if(n_HOR_NUME>0 && n_nombre_empleado>0  ){
      contador=2
  }
  else if(n_HOR_NUME==0 && n_nombre_empleado>0  ){
      contador=3
  } 
   
   
   */ 
  
  
       var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Contapyme/ajax/datatable-contapyme.ajax_1.php',
        async: false,
        dataType: 'json',
        data: { 
        vari_consulta:vari_consulta
           
        },
        success: function (retu) {
            datas = retu;
        }
    });
//alert("datas "+datas);
 
   $('#table_contapyme').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}




/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 