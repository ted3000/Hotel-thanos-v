
<?php

$servidor="Localhost";
$Usuario="root";
$Clave="";
$Base="Hotel thanos";
$Conectar= new mysqli($servidor, $Usuario, $Clave, $Base);
$Conectar -> set_charset('utf8');

?>