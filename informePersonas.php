<?php
    include('menuUsuarios.php');
    include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Personas</title>
    <link rel="stylesheet" href="css/remito.css">
    <link rel="stylesheet" href="css/universal.css">
</head>
<body>
    <section class="contenedorSeccion">
        <h1>Lista Personas</h1>
        <?php
            $listaPersonas=mysqli_query($conexion, "select * from persona");
        ?>
        <table>
		    <thead>
                <tr>
                    <th>IDPersona</th>
                    <th>Categoria Persona</th>
                    <th>Nombre</th>
                    <th>CUIL</th>
                    <th>Domicilio</th>
                    <th>Telefono</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th colspan='2'>Accion</th>
                </tr>
            </thead>
            <tbody>                    
            <?php                
                while ($per=mysqli_fetch_array($listaPersonas)){
            ?>
                <tr>
                    <td><?php echo $per['IDPERSONA'] ?></td>
                    <td><?php echo $per['IDCATEGORIAPERSONA'] ?></td>
                    <td><?php echo $per['NOMBREPERSONA'] ?></td>
                    <td><?php echo $per['CUILPERSONA'] ?></td>
                    <td><?php echo $per['DOMICILIOPERSONA'] ?></td>
                    <td><?php echo $per['TELEFONOPERSONA'] ?></td>
                    <td><?php echo $per['USUARIOPERSONA'] ?></td>
                    <td><?php echo $per['CONTRASENAPERSONA'] ?></td>
                    <td><a href="formularioEditarPersona.php?id='<?php echo $per['IDPERSONA'] ?>'">Editar</a></td>
                    <td><a href="borrarPersona.php?id='<?php echo $per['IDPERSONA'] ?>'">Borrar</a></td>
                </tr> 
            <?php } ?>                                       
            </tbody>
        </table>   
    </section>   
</body>
</html>