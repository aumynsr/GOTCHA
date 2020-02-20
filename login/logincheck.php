<?php
//print_r($_post);
//exit(): 
session_start();
        if(isset($_POST['email'])){
                  include("../connect.php");
                  $email = $_POST['email'];
                  $password = $_POST['password'];
                  $sql="SELECT * FROM users 
                  WHERE  email='$email' 
                  AND  password_cus='$password' ";
				  $result = mysqli_query($dbcon,$sql);
				  
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
					  
                      $_SESSION["id_cus"] = $row["id_cus"];
                      $_SESSION["name_cus"] = $row["name_cus"];
                      $_SESSION["type"]= $row["type"];
                    // if($_SESSION["id_cus"]!==''){ 

                    //     Header("Location:../main.php");
                    //   }
                      print_r($_SESSION["id_cus"].$_SESSION["name_cus"].$_SESSION["type"]);
                      if($row["type"]=="admin"){
                        Header("Location:../admin.php");
                      }else{
                        Header("Location:../index.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }
