<?php
	$servername = "localhost";
    $username = "root";
  	$password = "Tsistema073";
  	$dbname = "fallasfar";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM matriz WHERE Material NOT LIKE '' ORDER By id_Material LIMIT 0";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM matriz WHERE id_Material LIKE '%$q%' OR Descripcion LIKE '%$q%' OR CodPro LIKE '%$q%' OR Pro LIKE '%$q%' OR Barra LIKE '$q' ";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table class='white'>
    			<thead>
    				<tr id='titulo'>
    					<th>SAP</th>
    					<th>Material</th>
                        <th>Proveedor</th>
                        <th>Seleccion</th>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['Material']."</td>
    					<td>".$fila['Descripcion']."</td>
                        <td>".$fila['Pro']."</td>
                        <td><label><input type='checkbox' name='seleccion[]' class='filled-in' value='1'/><span></span></label></td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="<table class='white'>
                <thead>
                    <tr id='titulo'>
                        <th>SAP</th>
                        <th>Material</th>
                        <th>Proveedor</th>
                        <th>Seleccion</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>

                </tbody>


                </table>
                

                ";
    }


    echo $salida;

    $conn->close();



?>