<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>REGISTRATE</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/recliente.css">

</head>
 <body>

<?php 
    error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
include "conexion.php";

?>


    <div class="main-content">

        <!-- You only need this form and the form-register.css -->

    <form class="form-register" method="post" action="#">

        <div class="form-register-with-email">

        <div class="form-white-background">
        
        <div class="form-title-row">
            <h1>Productos</h1>
        
        </div>
                <div class="contact">

                
                <div class="form-row">
                    <input name="Nombre" placeholder="Nombre" tabindex="1" required autofocus>
                </div>

                <div class="form-row">
                    <input name="Provedor" placeholder="Provedor" tabindex="1" required autofocus>
                </div>

                <div class="form-row">
                <input name="Fecha_nac" placeholder="Fecha de nacimiento" type="date" tabindex="1" required autofocus >
                </div>


                <div class="form-row">
                    <input name="Precio" placeholder="Precio" type="text" tabindex="2" required >
                </div>
                
                <div class="form-row">
                    <input name="Stock" placeholder="Stock" type="text" tabindex="3" required>
                </div>

                <div class="form-row">
                    <input name="Buscar" placeholder="Ingrse el nombre del producto..." type="text" tabindex="4" required>
                </div>

             
                
                <div class="form-row">
                    <button type="submit">Guardar</button>
                </div>


        
    </form>
    
</div>
        </form>
</div>
 
<?php 

    if ($_POST){
        $a=$_POST['Apellidos'];
        $n=$_POST['Nombre'];
        $f=$_POST['Fecha_nac'];
        $t=$_POST['Talla'];
        $DNI=$_POST['DNI'];
        $t=$_POST['Telefono'];
        $m=$_POST['Mensaje'];

    switch ($s) {
        case 'Hombre':
            $s='H';
            break;
        case 'Mujer':
           $s='F';
            break;
    }
        $consulta="INSERT INTO contactanos (Nombres, Email, Telefono, Mensaje) VALUES ('$n', '$e'; '$t', '$m')";
    $conectar->query($consulta) or die(mysqli_error());

    echo '<script type="text/javascrip">
    window.location.assign("gracias.html");
    </script>';
      
    }

  
?>
    

</body>

</html>
