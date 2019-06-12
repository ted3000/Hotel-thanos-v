<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Productos</title>

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
                <input name="Fecha_ven" placeholder="Fecha de vencimiento" type="date" tabindex="1" required autofocus >
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
        $n=$_POST['Nombre'];
        $p=$_POST['Provedor'];
        $f=$_POST['Fecha_ven'];
        $pr=$_POST['Precio'];
        $sc=$_POST['Stock'];
        $bs=$_POST['Buscar'];
        

    
        $consulta="INSERT INTO contactanos (Nombres, Provedor, Fecha_ven, Precio, Stock, Buscar) VALUES ('$n', '$p'; '$f', '$pr', '$sc', '$bs')";
    $conectar->query($consulta) or die(mysqli_error());

    echo '<script type="text/javascrip">
    window.location.assign("gracias.html");
    </script>';
      
    }

  
?>
    

</body>

</html>
