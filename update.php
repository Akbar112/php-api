<?php
  $koneksi = mysqli_connect("localhost","root","","php-api");
  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];
  $fullname = $_POST['fullname'];
  mysqli_query($koneksi, "UPDATE users SET id='$id', username='$username', password='$password', level='$level', fullname='$fullname' WHERE id='$id'");
  header("location:php-api.php");
 ?>
