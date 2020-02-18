<!DOCTYPE html>
<html lang="zxx">


<!DOCTYPE html>
<html lang="zxx">

<?php include("h.php"); 
    include("connect.php");
    $result = $dbcon->query("select * from orders inner join payment on payment.id_payment = orders.id_payment inner join users on users.id_cus = orders.id_cus where status='paid'");
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
            <li class="breadcrumb-item active" aria-current="page">comfirm order</li>
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
                        <th>ชื่อลูกค้า</th>
                        <th>ธนาคาร</th>
                        <th>สถานะ</th>
                        <th>ราคารวม</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <? while ($order = mysqli_fetch_array($result)) : ?>
                        <tr>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$order["id_order"]?></h2>
                            </td>


                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$order["name_cus"]?></h2>
                    
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$order["bank"]?></h2>
                                                               
                            </td>
                            <td class="product-id">
                            <h2 class="h5 text-black"><?=$order["status"]?></h2>
                            </td>
                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$order["total"]?></h2>
                                                 
                            </td>
                            <td colspan="2" style="text-align: right;">
                                <a href="confirm_detail.php?id_order=<?=$order["id_order"] ?>"class="btn btn-primary btn-lg">ดูรายละเอียด<a>
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