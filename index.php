<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

  <!-- Cover -->
  <main>
    <div class="hero">
      <a href="shop.php" class="btn1">Xem tất cả sản phẩm
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Featured Collection<h1>

      </div>

    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php
//Function call
    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Thông tin</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Nhãn hiệu</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Chăm sóc khách hàng</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Bảo mật &amp; cookies</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Site map</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading">Vì sao chọn chúng tôi</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Dịch vụ giao hàng &amp; returns</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Bảo mật giao hàng</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Testimonials</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Các giải thưởng</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Ethical trading</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Tài khoản</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Đăng nhập</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Đăng ký</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">View cart</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">View your lookbook</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Track an order</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Cập nhật thông tin</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Thông tin liên lạc</div>
            <address class="address">
            Head Office: Wurood.<br>
            Besiktas, Istanbul.
          </address>
            <div class="phone">
              Telephone:
              <a class="phone__number" href="tel:0123456789">0123-456-789</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:support@anything.com" class="email__addr">support@anything.com</a>
            </div>
          </div>

        </div>
      </div>

      <div class="page-footer__subline">
        <div class="container clearfix">

          <div class="copyright">
            &copy; 2023 FlowerShop
          </div>

          <div class="designby">
            Design by Waddah, Tayma, Abdallah
          </div>

        </div>
      </div>
    </footer>
</body>

</html>
