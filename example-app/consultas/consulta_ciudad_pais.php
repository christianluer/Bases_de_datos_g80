<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $nombre_pais = $_POST["nombredelpais"];

 	$query = "SELECT ciudades.nombre FROM ciudades, paises, nacionalidad WHERE LOWER(paises.nombre) LIKE LOWER('%$nombre_pais%') AND paises.pais_id = nacionalidad.pais_id AND ciudades.ciudad_id = nacionalidad.ciudad_id;";
	$result = $db -> prepare($query);
	$result -> execute();
	$datos = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>Ciudades</th>
    </tr>
  <?php
	foreach ($datos as $data) {
  		echo "<tr><td>$data[0]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
