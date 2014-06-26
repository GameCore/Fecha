<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
// Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
        date_default_timezone_set(UTC);
        //Imprimimos la fecha actual dandole un formato
        $hora1 = date("G");
        
        echo 'Cuado se visualiza esta pagina era las ,';
        echo date("H:m:s A,");
        echo 'del día ,';
        echo date("d-m-Y .<br>");
        echo '<br>';
        
        if( $hora1 <= 8 AND date("G") <= 12){
            echo 'Buenos días <br>';
        }
        elseif ( $hora1 > 12 AND date("G") <= 17) {
            echo 'Buenas Tardes <br>';
    }
        elseif ( $hora1 > 17 AND date("G") <= 18) {
        echo 'Tiempo de break <br>';
    }
        elseif ( $hora1 > 18 ) {
        echo 'Buenas noches';
    }
      
       
        
        ?>
    </body>
</html>
