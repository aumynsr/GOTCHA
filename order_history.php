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
            <li class="breadcrumb-item active" aria-current="page">Order History</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!--checkout-->
    <section class="page-section cta">
        <div class="container">

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>รหัสการสั่งซื้อ</th>
                        <th>วันที่</th>
                        <th>ชื่อผู้จัดจำหน่าย</th>
                        <th>ผู้สั่ง</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?
                    $result = $dbcon->query("select * from purchase_order inner join dealer on dealer.id_dealer = purchase_order.id_dealer inner join users ON users.id_cus = purchase_order.id_user");
                    while ($order = mysqli_fetch_array($result)) : ?>
                        <tr>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?= $order["id_po"] ?></h2>
                            </td>
                            <td class="product-id">
                                <h2 class="h5 text-black"><?= $order["date"] ?></h2>
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?= $order["name_dealer"] ?></h2>

                            </td>
                            <td class="product-id">
                                <h2 class="h5 text-black"><?= $order["name_cus"] ?></h2>

                            </td>


                            <td colspan="2" style="text-align: right;">
                                <a href="detail_order.php?id_order=<?= $order["id_po"] ?>" class="btn btn-primary btn-lg">ดาวน์โหลด<a>
                            </td>
                        </tr>
                    <? endwhile; ?>
                </tbody>
            </table>


        </div>
    </section>







    </div>
    </div>
    </div>
    </div>
    </section>