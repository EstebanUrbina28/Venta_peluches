<html>
<html>

<head>
  <title>Registro</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "registro") 
    or die("Problemas con la conexión");

  mysqli_query($conexion, "insert into usuario(cedula,nombres,correo,contraseña,ciudad,direccion)
   values ($_REQUEST[txtcod],'$_REQUEST[txtnom]','$_REQUEST[txtcorreo]','$_REQUEST[txtcon]','$_REQUEST[lstcarrera]','$_REQUEST[txtdir]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "Registro Exitoso.";
  ?>
</body>
<a href="registro.html">Registrarse</a>


</html>
