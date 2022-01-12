<?php

$server = "localhost";
$user = "root";
$pswd = "";
$bd = "form_db";

 if ( $conn = mysqli_connect($server, $user, $pswd, $bd) ) {
    // echo "Conectado!";
 } else
    echo "Erro!";



    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' role='alert'>
                 $texto
             </div>";
    }


    


?>
