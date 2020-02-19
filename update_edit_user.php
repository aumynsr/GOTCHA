<?php
require 'connect.php';
<?php
if (isset($_GET[id])) {
    $id = $_GET[id];
    $
} 
// $password = $_POST['password'];

// $re_password = $_POST['re_password'];

// // if ($password != $re_password) {
//     echo ("<script LANGUAGE='JavaScript'>
//                 window.alert('รหัสผ่านไม่ตรงกัน');
//                 window.location.href='edit_user.php';
//                 </script>");
//             exit;
//     }
//     $sql = "UPDATE users SET (password_cus) value ('$password') WHERE  ";
    $result = mysqli_query($dbcon, $sql);
        if ($result) {
            // echo ("<script>console.log('$result')</script>");
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('เปลี่ยนข้อมูฃเรียบร้อย');
                window.location.href='index.php';
                </script>");
        } else {
            echo "เกิดข้อผิดพลาด ". mysqli_error($dbcon);
        }
        // CLOSE DATABASE
        mysqli_close($dbcon);
    
    
    
    
    ?>
    