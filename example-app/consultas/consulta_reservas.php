<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	
 	$query = "SELECT usuarios.user_id, usuarios.nombre, reservashoteles.fecha_llegada, reservashoteles.fecha_salida, hoteles.nombre FROM usuarios, reservashoteles, hoteles, en_hotel, reservar WHERE reservashoteles.fecha_llegada >= '2020-01-01' AND reservashoteles.fecha_salida <= '2020-03-31' AND reservashoteles.reserva_id = en_hotel.reserva_id AND reservashoteles.reserva_id = reservar.reserva_id AND usuarios.user_id = reservar.user_id;";
	$result = $db -> prepare($query);
	$result -> execute();
	$datos = $result -> fetchAll();
?>

	    <table>
    <tr>
      <th>ID_usuario</th>
      <th>nombre_usuario</th>
      <th>fecha_llegada</th>
      <th>fecha_salida</th>
      <th>nombre_hotel</th>
    </tr>
<?php
	  foreach ($datos as $data) {
  	  	echo "<tr> <td>$data[0]</td> <td>$data[1]</td> <td>$data[2]</td> <td>$data[3]</td> <td>$data[4]</td> </tr>";
	  }
?>
	  </table>

<?php include('../templates/footer.html'); ?>