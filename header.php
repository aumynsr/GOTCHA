<style>
  .counter{
    position: absolute;
    top:24px;
    right: 2px;
    background-color: orange;
    width:24px;
    height:24px;
    border-radius: 12px;
    text-align: center;
    color: white;
  }

  .icart{
    position: absolute;
    margin-left: auto;
    margin-right: auto;
    margin-top: auto;
    margin-bottom: auto;
    top:0;
    bottom: 0;
    left:0;
    right:0;
  }

  .icart-container{
    position: relative;
    width: 48px;
    height: 48px;
    
  }
</style>
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
          <a href="checkout.php">
          <div class="icart-container">
            <img class="icart" src="images/cart.png" width="24px" />
            <div class="counter" id="counter">9+</div>
        </div>
          </a>
          <div class="nav-icon d-flex">
          
            <a class="portfolio-link" data-toggle="modal" href="">
              <div class="portfolio-hover">              
</div>

        <?php if (isset($_SESSION["id_cus"])): ?>
              <a href="login/logout.php" class="btn btn-outline-secondary  ml-3 my-sm-0">Logout</a>
              <a href="detail_user.php" >  <?=$_SESSION["name_cus"]?> </a>
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
                    <? include("connect.php");
                       $result = $dbcon->query("select * from category");
                    ?>
                    <? while($category=mysqli_fetch_array($result)): ?>
                    <a class="dropdown-item" href="index.php?category=<?=$category["id_cat"]?>"><?=$category["name_cat"]?></a>
                    <? endwhile; ?>
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

  <script>
    function getCountCart(){
      console.log('run')
      jQuery.get('http://localhost/GOTCHA/getCountCart.php?id_cus='+<?=$_SESSION["id_cus"]?>).then(function(res){
        
        if(res > 9){ 
          jQuery('#counter').html('9+');
        }else{
          jQuery('#counter').html(res);
        }
      })
    }

    getCountCart();
    
  </script>