<?php
       if (isset($_POST['submit'])){
       
        if(strlen($_POST['nombre']) > 0 ) {
            echo "<p> El nombre ingresado es : $_POST[nombre]</p>";
        } else{
            header("location: imprimir.php?res=vacio");
        }

        if(strlen($_POST['apellido']) > 0 ) {
            echo "<p> El apellido ingresado es : $_POST[apellido]</p>";
        } else{
            header("location: imprimir.php?res=vacio");
        }

        if(strlen($_POST['Correo']) > 0 ) {
            if (strpos($_POST['Correo'], "@")){
                echo "<p> El Correo ingresado es : $_POST[Correo] valido </p>" ;
        } else{
            echo "<p> El Correo ingresado es : $_POST[Correo] invalido </p>" ;
        } 
        }else{
            header("location: imprimir.php?res=vacio");
        }

    

        if(strlen($_POST['Telefono']) > 0 ) {
            if (is_numeric($_POST['Telefono'])){
            echo "<p> El Telefono ingresado es : $_POST[Telefono]</p>";
        }else{
            echo "<p> El Telefono ingresado es invalido </p>";
        }
    
    }else{
        header("location: Registro.php?res=vacio");
    }
    }
        ?>