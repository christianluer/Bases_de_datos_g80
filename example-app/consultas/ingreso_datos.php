<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $direccion = $_POST["direccion"];
	
 	$query = "SELECT usuarios.user_id, usuarios.nombre, sum(viajes.precio) FROM usuarios, tickets, viajes, comprar, ticket_viaje WHERE date(tickets.fecha_compra) >= '$fecha_ini' AND date(tickets.fecha_compra) <= '$fecha_fini' AND comprar.ticket_id = tickets.ticket_id AND usuarios.user_id = comprar.user_id AND ticket_viaje.ticket_id = tickets.ticket_id AND viajes.viaje_id = ticket_viaje.viaje_id GROUP BY usuarios.user_id;";
	$result = $db -> prepare($query);
	$result -> execute();
	$datos = $result -> fetchAll();
?>

	    <table>
    <tr>
      <th>ID_usuario</th>
      <th>nombre_usuario</th>
      <th>gasto_en_fechas</th>
    </tr>
<?php
	  foreach ($datos as $data) {
  	  	echo "<tr> <td>$data[0]</td> <td>$data[1]</td> <td>$data[2]</td> </tr>";
	  }
?>
	  </table>

<?php include('../templates/footer.html'); ?>