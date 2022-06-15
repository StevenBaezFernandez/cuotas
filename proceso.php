<?php 

if (isset($_POST)) {
	if (!empty($_POST)) {
		//Asignando la variables necesarias		
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$articulo = $_POST['articulo'];
		$precio = $_POST['prec-articulo'];
		$interes = $_POST['interes'];
		$t_pagar = $_POST['t-pagar'];
		//Sacando el interes y el total a pagar
		$interes /=100;
		$total_pagar = $precio * $interes + $precio;
		//Sacando el pago mensual
		$pago_mensual= $total_pagar / $t_pagar;
		$pago_mensual = round($pago_mensual,3);

		//Declaando la variable tabla y tabla cabecera
		$tabla="";
		$header_table = "<tr>
				<th>No.</th>
				<th>Cuota Pagada</th>
				<th>Balance</th>
			</tr>";
			//declarando la variable balance
		$balance = $total_pagar;
		// Bucle para asignar los valores a la variable tabla 
		for ($i=1; $i <=$t_pagar ; $i++) {
			// EL balance sera el total a pagar menos el pago mensual
			$balance -= $pago_mensual;
			//Redondeando el pago mensual
			$p_m = round($pago_mensual);
			//Redondeando el balance
			$b = round($balance);
			if ($b < 0) {
				$b = 0;
			}
				$tabla .="<tr>";
					$tabla .="<td>$i</td>";
					$tabla .="<td>$p_m</td>";
					$tabla .="<td>$b</td>";
				$tabla .="</tr>";
		}
	}

}



 ?>