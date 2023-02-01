<?php
require_once 'lib/controlador/prod.controlador.php';
/*
require_once "../../../controladores/ventas.controlador.php";
require_once "../../../modelos/ventas.modelo.php";

require_once "../../../controladores/clientes.controlador.php";
require_once "../../../modelos/clientes.modelo.php";

require_once "../../../controladores/usuarios.controlador.php";
require_once "../../../modelos/usuarios.modelo.php";

require_once "../../../controladores/productos.controlador.php";
require_once "../../../modelos/productos.modelo.php";
*/
class imprimirFactura{

public $codigo;

public function traerImpresionFactura(){

//TRAEMOS LA INFORMACIÓN DE LA VENTA

$itemVenta = "codigo";
$tra_cont_vari_v = $this->tra_cont_vari;

// $respuestaVenta = ControladorVentas::ctrMostrarVentas($itemVenta, $valorVenta); 
/*
$fecha = substr($respuestaVenta["fecha"],0,-8);
$productos = json_decode($respuestaVenta["productos"], true);
$neto = number_format($respuestaVenta["neto"],2);
$impuesto = number_format($respuestaVenta["impuesto"],2);
$total = number_format($respuestaVenta["total"],2);
*/
$fecha = '09/02/2021';
$productos = 'Producto Prueba';
$neto = number_format(300000);
$impuesto = number_format(6000);
$total = number_format(3600000);






//TRAEMOS LA INFORMACIÓN DEL CLIENTE

$itemCliente = "id";
//$valorCliente = $respuestaVenta["id_cliente"];
$valorCliente = 13121110;

//$respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

//TRAEMOS LA INFORMACIÓN DEL VENDEDOR

$itemVendedor = "id";
//$valorVendedor = $respuestaVenta["id_vendedor"];
$valorVendedor = 20202121;

//$respuestaVendedor = ControladorUsuarios::ctrMostrarUsuarios($itemVendedor, $valorVendedor);

//REQUERIMOS LA CLASE TCPDF

require_once('tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->startPageGroup();

$pdf->AddPage();

// ---------------------------------------------------------
//$tra_cont_vari_v=15;
$tra_cont=$tra_cont_vari_v;
$pedid = ControladorProd::ctrMostrarPedidosIIndividualDetalladoPdfEstPedido($tra_cont);	
 
$tttra_cont=$pedid['TRA_CONT'];
/*$TRA_FECH=$pedid['TRA_FECH'];
*/

$nombre_cliente=$pedid['NOMBRE_CLIENTE'];
$nit_cc_cliente=$pedid['IDENTIFICACION_CLIENTE'];
$direccion_cliente=$pedid['DIRECCION_CLIENTE'];
$telefono_cliente=$pedid['TELEFONO_CLIENTE'];

$correo_cliente=$pedid['CORREO'];

$factura_electronica=$pedid['FACTURA_ELECTRONICA'];
$fecha_pedido=$pedid['FECHA_PEDIDO'];
$forma_pago=$pedid['TIPO_FORMA_PAGO'];
$forma_entrega=strtoupper($pedid['T_FORMA_ENTREGA']);
$vendedor_nombre=$pedid['NOMBRE_VENDEDOR'];

$notas=$pedid['NOTAS_PEDIDO'];
$valor_total=number_format($pedid['TRA_VTOT']);

$PTV_NOMB_PED= $pedid['PTV_NOMB_PED'] ;
 
$punto_venta='---';
$prefijo='---';
$no_factura='---';
$fecha_factura='---';








$bloque1 = <<<EOF
 <table>
 <tr> <td style="width:390px"  ><table><tr><td>&nbsp;</td></tr><tr><td><img width="370" height="55"  src="images/lineasblue.png"></td></tr><tr><td>&nbsp;<br></td></tr></table></td>
 </tr>
  </table>
EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

// ---------------------------------------------------------
 $tablatr="";
 
 
 
 
 
 $detpedid = ControladorProd::ctrMostrarDetallePedidosIndPDF($tra_cont);	
		  for($i = 0; $i < count($detpedid); $i++){

		                                                                                                                                                                                                                                                                                                                                                                                                                                                      
       $DTR_CANT=$detpedid[$i]["DTR_CANT"];
       $PRO_CODI=$detpedid[$i]["PRO_CODI"];
       $PRO_NOMB=$detpedid[$i]["PRO_NOMB"];
       $VLR_UNIT=number_format($detpedid[$i]["VLR_UNIT"]);
       $VLR_TOTAL=number_format($detpedid[$i]["VLR_TOTAL"]);
                          
           
	
         $tablatr.='<tr>
                            <td style="width:60px;border: 1px solid #666; background-color:white;  ">'.$DTR_CANT.'</td>
                            <td style="border: 1px solid #666; background-color:white;  ">'.$PRO_CODI.'</td>
                            <td style="width:155.5px;border: 1px solid #666; background-color:white;  ">'.$PRO_NOMB.'</td>
                            <td style="border: 1px solid #666; background-color:white;  ">$ '.$VLR_UNIT.'</td>
                            <td style="border: 1px solid #666; background-color:white;  ">$ '.$VLR_TOTAL.'</td>
                 </tr>'; 
                        	 

		  }
 

$bloque2 = <<<EOF

	<table> 
		
		<tr>
			
			<td style="width:540px">&nbsp; </td>
		
		</tr>

	</table>

	<table style="font-size:10px; padding:5px 10px;">
                    
                         <tr>
                   <td colspan="5" style="border: 1px solid #666; background-color:white;  ">
                   <b>PUNTO DE VENTA DEL PEDIDO:</b> $PTV_NOMB_PED
                    </td> 
                    

                </tr>
                  
                  
                  <tr>
                   <td colspan="3" style="border: 1px solid #666; background-color:white;  ">
                   <b>INFORMACION DEL CLIENTE</b>
                    </td> 
                    <td colspan="2"  style="border: 1px solid #666; background-color:white;  ">
                  <b> PEDIDO CONTACT CENTER No. $tttra_cont</b>
                    </td> 

                </tr>

                  <tr>
                   <td  colspan="3" style="border: 1px solid #666; background-color:white;  ">
                   <table>
                    <tr><td colspan="2" style="text-align:left"><b>NOMBRE : </b>$nombre_cliente </td></tr>
                    <tr><td>&nbsp;</td></tr> 
                    <tr><td><b>NIT o CC:</b></td><td>$nit_cc_cliente</td></tr>
                    <tr><td><b>DIRECCION:</b></td><td>$direccion_cliente</td></tr>
                    <tr><td><b>TELEFONO:</b></td><td>$telefono_cliente</td></tr>
                    <tr><td><b>CORREO:</b></td><td>$correo_cliente</td></tr>
                  
                   </table>
                    </td> 
                    <td colspan="2" style="border: 1px solid #666; background-color:white;  ">
                      <table >
                    <tr><td colspan="2"><b>FACTURA ELECTRONICA:</b> $factura_electronica</td></tr>
                    <tr><td><b>FECHA:</b></td><td>$fecha_pedido</td></tr>
                    <tr><td><b>FORMA PAGO:</b></td><td>$forma_pago</td></tr>
                    <tr><td><b>FORMA ENTREGA:</b></td><td>$forma_entrega</td></tr>
                    <tr><td><b>VENDEDOR:</b></td><td>$vendedor_nombre</td></tr>
                   </table>
                    </td> 

                </tr>


                 <tr>
                            <td style="width:60px;border: 1px solid #666; background-color:white;  "><b>CANT.</b></td>
                            <td style="border: 1px solid #666; background-color:white;  "><b>CODIGO</b></td>
                            <td style="width:155.5px;border: 1px solid #666; background-color:white;  "><b>PRODUCTO</b></td>
                            <td style="border: 1px solid #666; background-color:white;  "><b>PRECIO</b></td>
                            <td style="border: 1px solid #666; background-color:white;  "><b>TOTAL</b></td>
                 </tr>
            $tablatr

                <tr>
                            <td rowspan="2" colspan="3" style="border: 1px solid #666; background-color:white; "><b>NOTAS:</b> $notas </td>
                            <td style="border: 1px solid #666; background-color:white;  "><b>TOTAL</b></td>
                            <td style="border: 1px solid #666; background-color:white;  ">$ $valor_total</td>
                            
                 </tr>
                 <tr>
                    <td rowspan="1" colspan="2" style="border: 1px solid #666; background-color:white;  ">  
                   <table>
                    <tr><td colspan="2" style="text-align:center"><center><b>DATOS FACTURA POS</b></center></td></tr>
                    <tr><td>&nbsp;</td></tr> 
                    <tr><td><b>PUNTO DE VENTA:</b></td><td>$punto_venta</td></tr>
                    <tr><td><b>PREFIJO </b></td><td>$prefijo</td></tr>
                    <tr><td><b>No FACTURA</b></td><td>$no_factura</td></tr>
                    <tr><td><b>FECHA FACTURA</b></td><td>$fecha_factura</td></tr>
                   </table>
                    </td> 
                    
                 </tr>
              
                <tr>
              <td  colspan="5" style="border: 1px solid #666; background-color:white;  "><b> Lineas Hospitalarias "Su confianza es nuestro compromiso" </b></td>
              </tr>
               
                 
                
	 	 

  

	</table>

EOF;

$pdf->writeHTML($bloque2, false, false, false, false, '');

 
// ---------------------------------------------------------
//SALIDA DEL ARCHIVO 

//$pdf->Output('factura.pdf', 'D');
ob_end_clean();
$pdf->Output('factura.pdf');

}

}

$factura = new imprimirFactura();
$factura -> tra_cont_vari = $_GET["tra_cont_vari"];
$factura -> traerImpresionFactura();

?>