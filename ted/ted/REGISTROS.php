<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>REGISTRATE</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/contactanos.css">

</head>
 <body>

<?php 

include "conexion.php";

?>


    <div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="post" action="#">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>REGISTRATE</h1>
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
                            <input type="number" name="Telefono">
                        </label>
                    </div>

                    <div class="form-row">
                         <label>
                            <span>Mensaje</span>
                            <textarea name="Mensaje"></textarea>
                        </label>
                    </div>
                    
                    <div class="form-row">
                        <button type="submit">Enviar</button>
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
