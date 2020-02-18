<!DOCTYPE html>
<html lang="zxx">


<!DOCTYPE html>
<html lang="zxx">

<?php include("h.php"); ?>

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
                        <th>รายละเอียด</th>
                         <th>ยอดรวม</th>
                        <th>หลักฐานการชำระเงิน</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <? while ($product = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <!--                             
                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["id_pro"]?></h2>
                                <input type="hidden" value="<?=$product["id_pro"]?>" id="id_pro"/>
                            </td>


                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["name_pro"]?></h2>
                                <input type="hidden" value="<?=$product["name_pro"]?>" id="name_pro"/>
                            </td>

                            <td class="product-id">
                                <?=$product["cart_total"]?>
                                <input type="hidden" value="<?=$product["cart_total"]?>" id="cart_total"/>
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["price"]?></h2>
                                <input type="hidden" value="<?=$product["price"]?>" id="price"/>                               
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["price"]*$product["cart_total"]?></h2>
                                <input type="hidden" value="<?=$product["price"]*$product["cart_total"]?>" id="total"/>                               
                            </td> -->



                           





                        </tr>
                    <? endwhile; ?>
                    <tr>
                        <td colspan="8" style="text-align: right;">

                            
                            <a href="#"class="btn btn-primary btn-lg">ยืนยันการชำระเงิน<a>
                        </td>
                    </tr>


                </tbody>
            </table>


        </div>
    </section>







    </div>
    </div>
    </div>
    </div>
    </section>