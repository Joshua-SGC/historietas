<?php
    session_start();
    session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Historietas</title>
</head>
<body>
    <center>
    <tr>INDICE DE HISTORIETAS</tr>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Editorial</th>
                <th>Personaje</th>
                <th>Genero</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Pais</th>
                <th>Imagen</th>
            </tr>
        </thead>
    <!-------titulos------->
    <tbody>
        <?php
            include ("open.php");
            $consulta = "SELECT * FROM publicaciones";
            $resultado = $conexion->query($consulta);
            while($row = $resultado->fetch_assoc()){
                ?>
            <tr>
                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['edit']; ?> </td>
                    <td><?php echo $row['pers']; ?> </td>
                    <td><?php echo $row['gene']; ?> </td>
                    <td><?php echo $row['auto']; ?> </td>
                    <td><?php echo $row['anio']; ?> </td>
                    <td><?php echo $row['pais']; ?> </td>

                    <td><img height="50px" src="data:image/jpg;base64,<?php  echo base64_encode($row['Imagen']);  ?> "></td>
            </tr>
            <?php 
            }
        ?>
    </tbody>
        </table>
        </center>

</body>
</html>