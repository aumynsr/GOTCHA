<?
session_start();

///////////หาค่า max ของ id

$hostdb = 'localhost';   // MySQl host
$userdb = 'root';    // MySQL username
$passdb = '12345678';    // MySQL password
$namedb = 'gotcha';   // MySQL database name
mysql_connect($hostdb, $userdb, $passdb);
mysql_select_db($namedb);
mysql_set_charset("utf8");
$attribute = $_POST['attribute'];
$keyword = $_POST['keyword'];

?>

<html lang="en">
<?
include("../admin_head.php")
?>

<body>

  <?
  include("../admin_header.php")
  ?>


      <button button type="button" class="btn btn-danger" class="nav-link text-uppercase text-expanded" data-toggle="collapse" data-target="#demo"><font size="2">เพิ่มข้อมูลใหม่</button></font>
      <div id="demo" class="collapse">
        <p>
          <?php

          ///////////หาค่า max ของ id
          //include("Connection_inct3.php"); $link = connectToDB();//ติดต่อฐานข้อมูล
          $sql_select   = "SELECT max(id_admin) as newID FROM admin"; //คำสั่งคิวรี่
          $query_select = mysql_query($sql_select); //สั่งให้คิวรี่ทำงาน
          $data     = mysql_fetch_array($query_select); //สร้างตัวแปร สำหรับเก็บคำสั่งดึงค่าทีละฟิวล์
          $newID    = $data['newID'];
          $newID += 1;


          ?><form id="form1" name="form1" method="post" action="in_add_new.php" enctype="multipart/from-data">
            <section class="page-section cta">
          <div class="container"> 
              <table class="table table-striped table-bordered">
                  <thead>
                      <tr>
                          <th width="30" bgcolor="#FFCC99"><font size="3">id_admin</font></a></p>
                          รหัสแอดมิน</th>
                          <th width="50" bgcolor="#FFCC99"><font size="3">name_admin</font></a></p>
                          ชื่อแอดมิน</th>
                          <th width="30" bgcolor="#FFCC99"><font size="3">username_admin</font></a></p>
                          ชื่อผู้ใช้</th>
                          <th width="50" bgcolor="#FFCC99"><font size="3">password_admin</font></a></p>
                          รหัสผ่าน</th>
          
          
          
          
        

        <tr>
          <th align="left">&nbsp;
            <label for="id_admin"></label>
            <input name="id_admin" type="text" readonly="readonly" style="background:#999" id="id_admin" value="<?= $newID ?>" size="5" /></th>
          <th align="left"><input type="text" name="name_admin" /></th>
          <th align="left"><input type="text" name="username_admin" /></th>
          <th align="left"><input type="text" name="password_admin" /></th>         
        </tr>


        <th colspan="11" align="center"><button class="w3-button w3-teal" class="nav-link text-uppercase text-expanded" type="submit" name="button" id="button">บันทึก</button></p>
        </th>
        </tr>
        </tbody>
        </table>
        </form>
        </p>
      </div>

      </table>
            </div>
    </section>

      <p>&nbsp;</p>
      <p> <input class="form-control" id="myInput" type="text" placeholder="Search.."></p>
      
      <section class="page-section cta">
          <div class="container"> 
              <table class="table table-striped table-bordered">
                  <thead>
                      <tr>
                      <th width="30" bgcolor="#FFCC99"><font size="3">แก้ไข</font></a></th>
                    <th width="30" bgcolor="#FFCC99"><font size="3">ลบ</font></a></th>
                    <th width="150" bgcolor="#FFCC99"><font size="3">id_admin</font></a></p>
                          รหัสแอดมิน</th>
                          <th width="50" bgcolor="#FFCC99"><font size="3">name_admin</font></a></p>
                          ชื่อแอดมิน</th>
                          <th width="30" bgcolor="#FFCC99"><font size="3">username_admin</font></a></p>
                          ชื่อผู้ใช้</th>
                          <th width="50" bgcolor="#FFCC99"><font size="3">password_admin</font></a></p>
                          รหัสผ่าน</th>
            <div>
            <div>
</div>
</div>
      





            <?php
            $sortby = $_GET['sortby'];
            if ($sortby == "") {
              $sortby = "id_admin";
            }
            $sql_select = " SELECT * FROM admin order by $sortby "; //คำสั่งคิวรี่
            mysql_query("set names utf8"); //อ่านภาษาไทยจากฐานข้อมูล
            $query_select = mysql_query($sql_select); //สั่งให้คิวรี่ทำงาน
            $numrow = mysql_num_rows($query_select); //นับจ้ำนวนแถวที่มี ตามคำสั่งคิวรี่

            for ($i = 0; $i < $numrow; $i++) { //วนลูปเพื่อดึงค่าจากฐานข้อมูลทีละแถว
              $data = mysql_fetch_array($query_select); //สร้างตัวแปร สำหรับเก็บคำสั่งดึงค่าทีละฟิวล์
              $id_admin   = $data['id_admin'];
              $name_admin  = $data['name_admin'];
              $username_admin   = $data['username_admin'];
              $password_admin   = $data['password_admin'];
          


            ?>
              </h5>
              </th>
          </tr>
        </tbody>
        <tbody id="myTable">
          <tr>
            <th align="center"><a href="in_add_edit.php?id=<?= $id_admin ?>">แก้ไข</a></th>
            <th align="center"><a href="in_add_delete.php?id=<?= $id_admin ?>">ลบ</a></th>
            <th height="52" align="center">
              <p><?php echo $id_admin; ?></p>
            </th>
            <th align="center"><?php echo $name_admin; ?></th>
            <th align="center"><?php echo $username_admin; ?></th>
            <th align="center"><?php echo $password_admin; ?></th>
            
          

          </tr> <? } ?>
        </tbody>
      </table>
      </p>


      </table>
            </div>
    </section>



      <script>
        $(document).ready(function() {
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
      </script>
      </p>

      <!-- //footer -->
      <!-- sign up Modal -->

      <!-- signin Modal -->
      <!-- js -->
      <script src="js/jquery-2.2.3.min.js"></script>
      <!-- //js -->
      <!-- script for show signin and signup modal -->
      <script>
        $(document).ready(function() {
          $("#portfolioModal1").modal();
        });
      </script>
      <!-- //script for show signin and signup modal -->
      <!-- smooth dropdown -->
      <script>
        $(document).ready(function() {
          $('ul li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
          }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
          });
        });
      </script>
      <!-- //smooth dropdown -->
      <!-- script for password match -->
      <script>
        window.onload = function() {
          document.getElementById("password1").onchange = validatePassword;
          document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
          var pass2 = document.getElementById("password2").value;
          var pass1 = document.getElementById("password1").value;
          if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
          else
            document.getElementById("password2").setCustomValidity('');
          //empty string means no validation error
        }
      </script>
      <!-- script for password match -->
      <!-- Banner Responsiveslides -->
      <script src="js/responsiveslides.min.js"></script>
      <script>
        // You can also use "$(window).load(function() {"
        $(function() {
          // Slideshow 4
          $("#slider3").responsiveSlides({
            auto: false,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function() {
              $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
              $('.events').append("<li>after event fired.</li>");
            }
          });

        });
      </script>
      <!-- // Banner Responsiveslides -->
      <!-- Product slider Owl-Carousel-JavaScript -->
      <script src="js/owl.carousel.js"></script>
      <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
          items: 4,
          loop: false,
          margin: 10,
          autoplay: false,
          autoplayTimeout: 5000,
          autoplayHoverPause: false,
          responsive: {
            320: {
              items: 1,
            },
            568: {
              items: 2,
            },
            991: {
              items: 3,
            },
            1050: {
              items: 4
            }
          }
        });
      </script>
      <!-- //Product slider Owl-Carousel-JavaScript -->
      <!-- cart-js -->
      <script src="js/minicart.js">
      </script>
      <script>
        hub.render();

        hub.cart.on('new_checkout', function(evt) {
          var items, len, i;

          if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
          }
        });
      </script>
      <!-- //cart-js -->
      <!-- start-smooth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
        jQuery(document).ready(function($) {
          $(".scroll").click(function(event) {
            event.preventDefault();

            $('html,body').animate({
              scrollTop: $(this.hash).offset().top
            }, 1000);
          });
        });
      </script>
      <!-- //end-smooth-scrolling -->
      <!-- smooth-scrolling-of-move-up -->
      <script>
        $(document).ready(function() {
          /*
          var defaults = {
              containerID: 'toTop', // fading element id
              containerHoverID: 'toTopHover', // fading element hover id
              scrollSpeed: 1200,
              easingType: 'linear' 
          };
          */

          $().UItoTop({
            easingType: 'easeOutQuart'
          });

        });
      </script>
      <script src="js/SmoothScroll.min.js"></script>
      <!-- //smooth-scrolling-of-move-up -->
      <!-- Bootstrap core JavaScript
================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="js/bootstrap.js"></script>

    </body>

</html>