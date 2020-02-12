<?php
require 'connect.php';
$name = $_POST['name'];
//echo"$name";

$email= $_POST['email'];
//echo "$email";

$password = $_POST['password'];
//echo"$password";

$re_password = $_POST['re_password'];
//echo"$re_password";

if ($password != $re_password) {
echo ("<script LANGUAGE='JavaScript'>
            window.alert('รหัสผ่านไม่ตรงกัน');
            window.location.href='register.php';
            </script>");
        exit;
}
$sql = "INSERT INTO customer (name_cus, email, password_cus) VALUES ('$name', '$email', '$password')";
$result = mysqli_query($dbcon, $sql);
    if ($result) {
        // echo ("<script>console.log('$result')</script>");
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('สมัครสมาชิกสำเร็จ');
            window.location.href='../login/login.php';
            </script>");
    } else {
        echo "เกิดข้อผิดพลาด ". mysqli_error($dbcon);
    }
	// CLOSE DATABASE
    mysqli_close($dbcon);




?>
