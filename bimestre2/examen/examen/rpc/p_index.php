<?php
  
  session_start();

  if(isset($_SESSION['user_id'])) {

    $user_id = $_SESSION['user_id'];
    $connection = mysqli_connect('localhost', 'root', '', 'examen2');
    $data = mysqli_query($connection, "SELECT * FROM `estudiantes` WHERE `id` = '{$user_id}'");
    $row_cnt = mysqli_num_rows($data);

    if($row_cnt == 1) {
      $row = mysqli_fetch_array($data);
      $first_name = $row['first_name'];
      $last_name = $row['last_name'];
    }

  } else {
    header("Location: index.php");
    exit;
  }

?>