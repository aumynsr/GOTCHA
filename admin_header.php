<header>    
  <div class="container">
    <!-- top nav -->
    <nav class="top_nav d-flex pt-3 pb-1">
      <!-- logo -->
      <h1>

        <a class="navbar-brand" href="index.php">GOTCHA
        </a>
      </h1>
      <!-- //logo -->
      <div class="w3ls_right_nav ml-auto d-flex">

        <div class="nav-icon d-flex">
          <!-- sigin and sign up -->

          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal25">
            <div class="portfolio-hover">
            </div>

          </a>

          <?php if (isset($_SESSION["id_cus"])) : ?>
            <a href="login/logout.php" class="btn btn-outline-secondary  ml-3 my-sm-0">Logout</a>
          <?php else : ?>
            <a href="login/login.php" class="btn btn-outline-secondary  ml-3 my-sm-0">Login</a>
        </div>
      <?php endif; ?>
      </div>

      <div class="portfolio-modal modal fade" id="portfolioModal25" tabindex="-1" role="dialog" aria-hidden="true">
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- //shopping cart ends here -->
  </div>
  </div>
  </div>
  </nav>

  <body>
    <!-- //shopping cart ends here -->
    </div>
    </div>
    </div>
    </nav>
    <!-- //top nav -->
    <!-- bottom nav -->
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto text-center">
          <li class="nav-item dropdown has-mega-menu" style="center;">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <font size="3"><B>ข้อมูลทั่วไป</font></B>
            </a>
            <div class="dropdown-menu" style="center">
              <div class="px-0 container">
                <div class="row">
                  <div class="col-md-10">
                    <a class="dropdown-item" href="in_product.php">
                      <font size="3">ข้อมูลสินค้า</font>
                    </a>
                    <a class="dropdown-item" href="in_cate/in_cate.php">
                      <font size="3">ข้อมูลประเภทสินค้า</font>
                    </a>
                    <a class="dropdown-item" href="in_cus/in_cus.php">
                      <font size="3">ข้อมูลลูกค้า</font>
                    </a>
                    <a class="dropdown-item" href="in_add/in_add.php">
                      <font size="3">ข้อมูลผู้ดูแลระบบ</font>
                    </a>
                    <a class="dropdown-item" href="in_dealer/in_dealer.php">
                      <font size="3">ข้อมูลผู้จัดจำหน่าย</font>
                    </a>
                  </div>


                </div>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="purchase.php">
              <font size="3"><B>สั่งซื้อสินค้าเข้าร้าน</font></B>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pickup.php">
              <font size="3"><B>รับสินค้าเข้าคลัง</font></B>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="comfirmorder.php">
              <font size="3"><B>ตรวจสอบการสั่งซื้อ</font></B>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="checklogis.php">
              <font size="3"><B>ยืนยันการจัดส่ง</font></B>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.php">
              <font size="3"><B>ออกรายงาน</font></B>
            </a>
          </li>

        </ul>
      </div>
    </nav>
    <!-- //bottom nav -->
    </div>
    <!-- //header container -->
</header>