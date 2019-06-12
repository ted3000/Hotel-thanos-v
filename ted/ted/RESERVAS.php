<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Reservas</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/contactanos.css">

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
                        <h1>RESERVAS</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Nombre</span>
                            <input type="text" name="name">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Telefono</span>
                            <input type="text" name="Telefono">
                        </label>
                    </div>

                    <div class="form-row">
                         <label>
                            <span>Mensaje</span>
                            <textarea name="Mensaje"></textarea>
                        </label>
                    </div>

                    <div class="form-row">
                    <span>Tipos de habitacion</span>
                    <select name="dropdown">
                        <option>Simple</option>
                        <option>Doble</option>
                        <option>Matrimonial</option>
                    </select>
                    </div>
                    
                    <div class="form-row">
                        <button type="submit">Enviar</button>
                    </div>

                    
            </div>

                </div>

               

            </div>


            </div>

        </form>

 
<?php 

    if ($_POST){
        $n=$_POST['Nombre'];
        $e=$_POST['Email'];
        $t=$_POST['Telefono'];
        $m=$_POST['Mensaje'];

        switch ($s) {
        case 'Simple':
            $s='Sim';
            break;
        case 'Doble':
           $s='Duo';
            break;
        case 'Matrimonial':
           $s='Mat';
            break;
        }
        $consulta="INSERT INTO contactanos (Nombres, Email, Telefono, Mensaje) VALUES ('$n', '$e'; '$t', '$m')";
    $conectar->query($consulta) or die(mysqli_error());

    echo '<script type="text/javascrip">
    window.location.assign("gracias.html");
    </script>';

    }
?>
    <footer class="pie">
        
    </footer>

</body>

</html>
