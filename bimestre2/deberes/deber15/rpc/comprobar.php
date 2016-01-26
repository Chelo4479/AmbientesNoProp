<?php


if ($_POST) {
    $usuar = $_POST['usuario'];


    $q_usu = "SELECT * FROM datos WHERE usuario = '" . $user . "'";
    $result = $conn->query($q_usua);
    $num_rows = $result->num_rows;


    if ($num_rows == 0) {
        echo "El nombre de usuario ya existe";
    }
}

?>

?>