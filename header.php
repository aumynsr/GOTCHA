<?php session_start();?>
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
          <!-- search form -->
          <form class="nav-search form-inline my-0 form-control" action="#" method="post">
            <select class="form-control input-lg" name="category">
              <option value="all">Search our store</option>
              <optgroup label="Bags">
                <option value="Bagket Bags">Bagket Bags</option>
                <option value="Shoulder Bags">Shoulder Bags</option>
                <option value="Card Pocket">Card Pocket</option>
                <option value="Wallet Bags">Wallet Bags</option>
                <option value="Clutch Bags">Clutch Bags</option>


              </optgroup>


            </select>
            <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" value="Search">
          </form>
          <!-- search form -->
          <div class="nav-icon d-flex">

            <a class="portfolio-link" data-toggle="modal" href="">
              <div class="portfolio-hover">              
</div>
        <?php if (isset($_SESSION["id_cus"])): ?>
              <a href="login/logout.php" class="btn btn-outline-secondary  ml-3 my-sm-0">Logout</a>
        <?php else: ?>
              <a href="login/login.php" class="btn btn-outline-secondary  ml-3 my-sm-0">Login</a>
          </div>
        <?php endif; ?>
          <!-- sigin and sign up -->
          <!-- shopping cart -->

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
          <li class="nav-item">
            <a class="nav-link  active" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown has-mega-menu" style="center;">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Bags</a>
            <div class="dropdown-menu" style="center">
              <div class="px-0 container">
                <div class="row">
                  <div class="col-md-10">
                    <a class="dropdown-item" href="shopbagket.php?category=1">Bagket Bags</a>
                    <a class="dropdown-item" href="shopshoulder.php?category=2">Shoulder Bags</a>
                    <a class="dropdown-item" href="shopcard.php?category=4">Card Pocket</a>
                    <a class="dropdown-item" href="shopwallet.php?category=5">Wallet Bags</a>
                    <a class="dropdown-item" href="shopclutch.php?category=6">Clutch Bags</a>
                  </div>


                </div>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <!-- <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li> -->
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="checkout.php">Cart</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- //bottom nav -->
    </div>
    <!-- //header container -->
  </header>