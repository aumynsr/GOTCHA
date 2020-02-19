<!DOCTYPE html>
<html lang="zxx">

<?php include("h.php");
include("connect.php");
?>

<body>
    <?php include("header.php"); ?>
    <!-- sigin and sign up -->

    <!-- //header -->
    <!-- inner banner -->

    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!--checkout-->
    <section class="page-section cta">
        <div class="container">

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>รายะเอียดสินค้า</th>
                        <th>ชื่อผู้รับ</th>
                        <th>เบอร์</th>
                        <th>ที่อยู่ในการจัดส่ง</th>
                        <th>รหัสไปรษณี</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <? while ($order = mysqli_fetch_array($result)) : ?>
                        <tr>

                            <!-- <td class="product-id">
                                <h2 class="h5 text-black"><?= $order["id_order"] ?></h2>
                            </td>


                            <td class="product-id">
                                <h2 class="h5 text-black"><?= $order["name_cus"] ?></h2>
                    
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?= $order["bank"] ?></h2>
                                                               
                            </td>
                            <td class="product-id">
                            <h2 class="h5 text-black"><?= $order["status"] ?></h2>
                            </td>
                            <td class="product-id">
                                <h2 class="h5 text-black"><?= $order["total"] ?></h2>
                                                 
                            </td>
                            <td colspan="2" style="text-align: right;">
                                <a href="confirm_detail.php?id_order=<?= $order["id_order"] ?>"class="btn btn-primary btn-lg">ดูรายละเอียด<a>
                            </td> -->
                        </tr>
                    <? endwhile; ?>
                </tbody>
            </table>
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button name="confirm" type="confirm" class="btn btn-success">ยืนยัน</button>
                <button class="btn btn-danger" type="not_confirm">ไม่ยืนยัน</button>
            </div>

        </div>
    </section>