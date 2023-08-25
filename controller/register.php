<?php
if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $sex = $_POST['sex'];
  $email = $_POST['email'];
  $perfix = $_POST['perfix'];
  if (empty($username) || empty($password) || empty($name) || empty($phone) || empty($sex) || empty($email) || empty($perfix)) {
    echo "กรอกข้อมมูลไม่ครบ โปรดลองใหม่อีกครั้ง";
  } else {
    $sql_q = "SELECT * FROM customer WHERE customer_email = '$email'";
    $sql_q_q = mysqli_query($conn, $sql_q);
    if (mysqli_num_rows($sql_q_q) > 0) {
      echo "มี Email นี้ในระบบแล้ว";
    } else {
      $sql_reg = "INSERT INTO customer VALUES (NULL, '$name', '$phone', '$sex', '$email', '$username', '$password')";
      $sql_reg_q = mysqli_query($conn, $sql_reg);
      if ($sql_q) {
        echo "สมัครสำเร็จ";
      } else {
        echo "เกิดข้อผิดพลาดในการสมัคร";
      }
    }
  }
}
