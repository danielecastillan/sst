<?php
 require_once 'lib/controlador/prod.controlador.php';
//require_once "../../../lib/productos/controladores/prod.controlador.php";
//require_once '../../../lib/productos/modelos/prod.modelo.php';

class imprimirFactura{

public $tra_cont_vari;

public function traerImpresionFactura(){
 
$tra_cont_vari_v = $this->tra_cont_vari;

//TRAEMOS LA INFORMACIÓN DE LA VENTA
/*
$itemVenta = "codigo";
$valorVenta = $this->codigo;

$respuestaVenta = ControladorVentas::ctrMostrarVentas($itemVenta, $valorVenta);

$fecha = substr($respuestaVenta["fecha"],0,-8);
$productos = json_decode($respuestaVenta["productos"], true);
$neto = number_format($respuestaVenta["neto"],2);
$impuesto = number_format($respuestaVenta["impuesto"],2);
$total = number_format($respuestaVenta["total"],2);
*/
//TRAEMOS LA INFORMACIÓN DEL CLIENTE
/*
$itemCliente = "id";
$valorCliente = $respuestaVenta["id_cliente"];

$respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);
*/
//TRAEMOS LA INFORMACIÓN DEL VENDEDOR
/*
$itemVendedor = "id";
$valorVendedor = $respuestaVenta["id_vendedor"];

$respuestaVendedor = ControladorUsuarios::ctrMostrarUsuarios($itemVendedor, $valorVendedor);
*/
//REQUERIMOS LA CLASE TCPDF

require_once('tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->AddPage('R', 'B16');
 $pdf->SetMargins(1.5, 10, PDF_MARGIN_RIGHT);
 //$pdf->SetTopMargin(1);
//---------------------------------------------------------
$tra_cont=$tra_cont_vari_v;
$pedid = ControladorProd::ctrMostrarPedidosIIndividualDetalladoPdfPedido($tra_cont);	

$tttra_cont=$pedid['TRA_CONT'];
$TRA_FECH=$pedid['TRA_FECH'];


$fecha=$TRA_FECH;
$valorVenta= '600000';
$valorUnitario='3000';


$numero_pedido='56';
$numero_pedido=$pedid['TRA_CONT'];
$fecha_pedido='06/06/2020';
$fecha_pedido=$TRA_FECH;
$nit_cliente='1095815913';
$nit_cliente= $pedid['CLI_CODA'];
$nombre_cliente='Daniel Eduardo Castilla Nieto';
$nombre_cliente= $pedid['NOMBRE_CLIENTE'];

$total_pedido= number_format($pedid['TRA_VTOT']);

$notas='Registro Nota de Prueba';
$notas=$pedid['TFO_NOTA']; 
$forma_entrega='Domicilio';
$forma_entrega= $pedid['TRA_FENT'];
$forma_pago= $pedid['TFO_NOMB'];





$punto_venta='---';
//$punto_venta= $pedid['PTV_NOMB'];



//$prefijo_factura= $pedid['TRA_PREF'];
$prefijo_factura= '---';
$numero_factura='---';
//$numero_factura=  $pedid['TRA_DIAN'];
$caj_nomb='---';
//$caj_nomb= $pedid['CAJ_NOMB'];
$tr="";

$detpedid = ControladorProd::ctrMostrarDetallePedidosIndPDF($tra_cont);	
		  for($i = 0; $i < count($detpedid); $i++){

		                                                                                                                                                                                                                                                                                                                                                                                                                                                      
       $DTR_CANT=$detpedid[$i]["DTR_CANT"];
       $PRO_CODI=$detpedid[$i]["PRO_CODI"];
       $PRO_NOMB=$detpedid[$i]["PRO_NOMB"];
       $VLR_TOTAL=number_format($detpedid[$i]["VLR_TOTAL"]);
                          
           
	 $tr.= '<tr><td>'.$DTR_CANT.'</td><td colspan="2">'.$PRO_CODI.'-'.$PRO_NOMB.'  </td><td colspan="1">$ '.$VLR_TOTAL.'</td></tr>';
        
             
                        	 

		  }


$bloque1 = <<<EOF
 <img width="160" height="22" style="margin: 0px 0px 0px;" src="images/lineasblue.png"    >                 
 <table style="font-size:8px; text-align:left">
              
  <tr>
 <td style="width:160px;"></td>
 </tr>
  <hr style="width:160px;"> 
 <tr>
 <td style="width:160px;">NIT:900294380-1</td>
 </tr>    
<tr>
 <td style="width:160px;">
 <div>Pedido Contac Center: # $numero_pedido
       <br>
      Fecha: $fecha_pedido
        <br>
      Cliente: $nit_cliente
        <br>
      Nombre: $nombre_cliente
        <hr/><hr/>
<table style="font-size:7px; text-align:left">
<tr><td>Cant</td><td colspan="2">Producto</td><td colspan="1">Valor</td></tr>
  $tr                
</table>
 <hr/><hr/>
Total Pedido: $ $total_pedido
<br>
Notas : $notas
<br> 
Forma de Entrega: $forma_entrega
<br>
Forma de Pago: $forma_pago
 <hr/><hr/>
Datos de Factura POS
<br>
$punto_venta
<br>
$prefijo_factura - $numero_factura
<br>
Cajero: $caj_nomb
  </div>
 </td>
 </tr>
 </table>

EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

// ---------------------------------------------------------

/*
foreach ($productos as $key => $item) {

 $valorUnitario = number_format($item["precio"], 2);

$precioTotal = number_format($item["total"], 2);

$bloque2 = <<<EOF

<table style="font-size:9px;">

	<tr>
	
		<td style="width:160px; text-align:left">
		Sandalias
		</td>

	</tr>

	<tr>
	
		<td style="width:160px; text-align:right">
		$ $valorUnitario Und * $item[cantidad]  = $ $precioTotal
		<br>
		</td>

	</tr>

</table>

EOF;

$pdf->writeHTML($bloque2, false, false, false, false, '');

}
*/


 
/*
$bloque2 = <<<EOF

<table style="font-size:9px;">

	<tr>
	
		<td style="width:160px; text-align:left">
		Sandalias
		</td>

	</tr>

	<tr>
	
		<td style="width:160px; text-align:right">
		$ 6000 Und * 210  = $ 60050
		<br>
		</td>

	</tr>

</table>

EOF;
*/
$pdf->writeHTML($bloque2, false, false, false, false, '');


// ---------------------------------------------------------
/*
$bloque3 = <<<EOF

<table style="font-size:9px; text-align:right">

	<tr>
	
		<td style="width:80px;">
			 NETO: 
		</td>

		<td style="width:80px;">
			$ 30
		</td>

	</tr>

	<tr>
	
		<td style="width:80px;">
			 IMPUESTO: 
		</td>

		<td style="width:80px;">
			$ 40
		</td>

	</tr>

	<tr>
	
		<td style="width:160px;">
			 --------------------------
		</td>

	</tr>

	<tr>
	
		<td style="width:80px;">
			 TOTAL: 
		</td>

		<td style="width:80px;">
			$ $total
		</td>

	</tr>

	<tr>
	
		<td style="width:160px;">
			<br>
			<br>
			Muchas gracias por su compra
		</td>

	</tr>

</table>



EOF;
*/
$pdf->writeHTML($bloque3, false, false, false, false, '');

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