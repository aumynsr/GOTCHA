<?
session_start();
//print_r($_SESSION["id_cus"].$_SESSION["name_cus"].$_SESSION["type"]."test");
session_destroy();
header("location: ../index.php");
?>