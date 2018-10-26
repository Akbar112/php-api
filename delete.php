<?php
  $koneksi = mysqli_connect("localhost","root","","project_php");
  $id = $_GET['id'];
  $qry = "DELETE FROM users WHERE id='$id'";
  mysqli_query($koneksi, $qry);
  header("location:php-api.php");
 ?>
