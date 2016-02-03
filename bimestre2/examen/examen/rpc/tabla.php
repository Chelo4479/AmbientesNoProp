 <?php

        $conexion = new mysqli('localhost','root','','examen2');

        $query = "SELECT * FROM materia";
        $resultado = $conexion->query($query);
        
        ?>