<!DOCTYPE html>
<html lang="zxx">

<?php include("h.php");
session_start(); ?>

<body>
  <?php include("header.php"); ?>
  <?php
  include("connect.php");
  $result = $dbcon->query("select * from users where id_cus=" . $_SESSION["id_cus"]);
  $profile = mysqli_fetch_assoc($result);
  ?>
  <div class="container">
    <form id="demo-form2" name="insert" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $id; ?>">
      <span> แก้ไขข้อมูลส่วนตัว </span>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"><span class="required">ชื่อ</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <span> <?= $profile['name_cus']; ?> </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"><span class="required">email</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <span> <?= $profile['email']; ?> </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"><span class="required">password</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="name" name="password_cus" value="<?= $profile['password_cus']; ?>" required class="form-control col-md-7 col-xs-12" style="box-shadow: 0 1px 4px 0 rgba(0,0,0,.1);
    border-radius: 4px;">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"><span class="required">confirm password</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="name" name="name" value="" required class="form-control col-md-7 col-xs-12" style="box-shadow: 0 1px 4px 0 rgba(0,0,0,.1);
    border-radius: 4px;">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

          <button class="btn btn-danger" type="reset">ยกเลิก</button>
          <button name="submit" type="submit" class="btn btn-success">บันทึก</button>
        </div>
      </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
      $password_cus = $_POST['password_cus'];

      $sql = " update users";
      $sql .= " set";
      $sql .= " password_cus= '$password_cus'";
      $sql .= " where";
      $sql .= " id_cus = " . $_SESSION["id_cus"];
      $dbcon->query($sql);
    }
    ?>

  </div>
  </div>