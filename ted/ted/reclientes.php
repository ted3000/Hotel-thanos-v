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
    error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
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
                    <input name="Apellodos" placeholder="Apellidos" tabindex="1" required autofocus>
                </div>

               <div class="form-row">
                    <input name="Nombre" placeholder="Nombre" tabindex="1" required autofocus>
                </div>
                <div>
                <input name="Fecha_nac" placeholder="Fecha de nacimiento" type="date" tabindex="1" required autofocus >
                </div>

                <div class="form-row"><br>
                    <select name="Sexo" id="" tabindex="2" required autofocus>
                        <option value="Elija">Elija su sexo</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>
                </div>

                <div class="form-row">
                    <input name="Talla" placeholder="Ingrese la talla" type="text" tabindex="2" required >
                </div>
                
                <div class="form-row">
                    <input name="DNI" placeholder="DNI" type="text" tabindex="3" required>
                </div>

                <div class="form-row">
                    <input name="Correo" placeholder="Escriba su correo" type="text" tabindex="4" required>
                </div>

                <div class="form-row">
                    <input name="Celular" placeholder="Nro de Telefono" type="text" tabindex="4" required>
                </div>
                
                <div class="form-row">
                    <input name="Direccion" placeholder="Escriba su direccion " type="text" tabindex="4" required >
                </div>

                <div class="form-row">
                    <input name="Distrito" placeholder="Escriba su distrio " type="text" tabindex="4" required >
                </div>

                <div class="form-row">
                    <input name="Provincia" placeholder="Escriba su provincia " type="text" tabindex="4" required >
                </div>


                <div class="form-row">
                    <button type="submit">Enviar</button>
                </div>


        
    </form>
    
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
