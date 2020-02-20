<!DOCTYPE html>
<html lang="zxx">

<?php 
session_start();
include("h.php");
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
            <li class="breadcrumb-item active" aria-current="page">Status Order</li>
        </ol>
    </nav>

    <div class="container">
    
    <?$sql="select *, orders.status as o_status from orders join delivery on delivery.id_delivery = orders.address where id_cus=".$_SESSION['id_cus']." order by id_order DESC"; 
    $r_order=$dbcon->query($sql) ;
    while($order=mysqli_fetch_array($r_order)): ?>
        <div class="container mb-5">
        <div class="row">
            <div class="col">
                ID Order <?=$order["id_order"] ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                date <?=$order["createDate"] ?>
            </div>
            <div class="col">
                address <?=$order["address"] ?>
            </div>
            <div class="col">
                Status  <?=$order["o_status"] ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>

                        <th>รูปสินค้า </th>
                        <th>รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>จำนวนที่ซื้อ</th>
                        <th>ราคา/ชิ้น</th>
                        <th>รวม</th>
                 
                    </tr>
                </thead>
                <tbody>
                    <? 
                    $result = $dbcon->query('select * from order_list join product on order_list.id_pro = product.id_pro where order_id='.$order["id_order"]);
                    while ($product = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <td class="product-thumbnail">
                                <img src="images/<?=$product["pic"]?>" alt="Image" class="img-fluid" style="width:200px;height:200px">
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["id_pro"]?></h2>
                                <input type="hidden" value="<?=$product["id_pro"]?>" id="id_pro"/>
                            </td>


                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["name_pro"]?></h2>
                                <input type="hidden" value="<?=$product["name_pro"]?>" id="name_pro"/>
                            </td>

                            <td class="product-id">
                                <?=$product["order_total"]?>
                            
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["price"]?></h2>
                                <input type="hidden" value="<?=$product["price"]?>" id="price"/>                               
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["price"]*$product["order_total"]?></h2>
                                      
                            </td>



                            <!-- <td class="product-id">
                                <a class="btn btn-danger btn-lg" href="shop.html" role="button">
                                    <span class="glyphicon glyphicon-trash"></span>
                                    ลบทิ้ง</a> </td> -->





                        </tr>
                    <? endwhile; ?>
                    <!-- <tr>
                        <td colspan="8" style="text-align: right;">

                            <a href="index.php" type="button" class="btn btn-danger btn-lg">ย้อนกลับ</a>
                            <a href="payment.php"class="btn btn-primary btn-lg">สั่งซื้อสินค้า<a>
                        </td>
                    </tr> -->


                </tbody>
            </table>
            </div>
        </div>
    </div>
  <? endwhile; ?>
    </div> 