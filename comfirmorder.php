<?
include("connect.php");
session_start();

?>

<html lang="en">
<?
include("admin_head.php")
?>

<body>

  <?
  include("admin_header.php")
  ?>

<body>

        <!-- sigin and sign up -->
       
    <!-- //header -->
    <!-- inner banner -->

    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item active" aria-current="page"><font size="4"><B>confirm order</font></B></li>
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
                    <? 
                    $result = $dbcon->query("select * from orders inner join payment on payment.id_payment = orders.id_payment inner join users on users.id_cus = orders.id_cus where status='paid'");
                    while ($order = mysqli_fetch_array($result)) : ?>
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
                                <a href="detail_order.php?id_order=<?=$order["id_order"] ?>"class="btn btn-primary btn-lg">ดูรายละเอียด<a>
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