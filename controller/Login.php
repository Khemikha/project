<?php
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'";
  $sql_q = mysqli_query($conn, $sql);
  print_r($sql_q);
  if (mysqli_num_rows($sql_q) > 0) {
    header('Location:?page=home');
  } else {
    echo 'error';
  }
}
