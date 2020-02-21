
<?
        include("connect.php");
        $category = "'%'";
        if (isset($_GET["category"])) {
          $category = $_GET["category"];
        }
        $select = $_POST['colors'];
        $in = '';
        for($i=0; $i<count($select); $i++){
            $in .= $select.",";
        }
        $result = $dbcon->query("SELECT product.*, color.* FROM product INNER JOIN color ON color.id_color = product.color_pro where id_cat like " . $category. " and product.color_pro in ()");

        ?>
        <? while ($product = mysqli_fetch_array($result)) : ?>

          <div class="col-lg-3 col-sm-6 p-0">

            <div class="card product-men p-3">
              <div class="men-thumb-item">

                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<? echo $product["id_pro"]; ?>">
                  <div class="portfolio-hover">
                  </div>
                  <img class="img-fluid" src="<?php echo "images/" . $product["pic"]; ?>" alt="">
                </a>


                <div class="portfolio-modal modal fade" id="portfolioModal<? echo $product["id_pro"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                          <div class="rl"></div>
                        </div>
                      </div>
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                              <!-- Project Details Go Here -->
                              <h2 class="text-uppercase"><? echo $product["name_pro"]; ?></h2>
                              <p class="item-intro text-muted">WOMEN กระเป๋าสะพาย</p>
                              <div class="caption">

                                <ul class="rating-single">
                                  <li>
                                    <a href="#">
                                      <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                  </li>
                                </ul>
                                <div class="clearfix"> </div>
                                <h6>
                                  ฿1,900.00</h6>
                              </div>
                              <img class="img-fluid d-block mx-auto" src="images/<?php echo $product["pic"]; ?>" alt="">
                              <br>

                              <B>Details</B>

                              <br>
                              <p><? echo $product["detail"]; ?></p><br>

                              <ul class="list-inline">
                                <li><B>Brand : </B>
                                  <font color="red">Gotcha(ก๊อตช่า)</font>
                                </li>
                                <li><B>Color : </B>
                                  <font color="red"><?= $product["name_color"] ?></font>
                                </li>
                                <li><B>Size : </B>
                                  <font color="red"><?= $product["size"] ?></font>
                                </li>
                                <li><B>Material : </B>
                                  <font color="red"><?= $product["material"] ?></font>
                                </li>
                                <li><B>Number of products : </B>
                                  <font color="red"><?= $product["total"] ?></font>
                                </li>
                              </ul>
                              <br>
                              <p>
                                <h3 align='center'><button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>ปิด</button>


                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- card body -->
              <div class="card-body  py-3 px-2">
                <h5 class="card-title text-capitalize"><? echo $product["name_pro"]; ?></h5>
                <div class="">
                  <!-- <p class="text-dark font-weight-bold"></p> -->
                  <p class="line-through">฿<? echo $product["price"]; ?></p>
                </div>
              </div>
              <!-- card footer -->
              <div class="card-footer d-flex justify-content-end">

                <form action="" method="post">

                  <!-- <a href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                </a> -->

                  <button type="button" class="fa fa-cart-plus" onClick="addCart(<?= $id_cus ?>, <?= $product['id_pro'] ?>)"></button>
                </form>
              </div>
            </div>
          </div>
        <? endwhile; ?>