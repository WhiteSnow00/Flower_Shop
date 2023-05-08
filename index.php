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
            <h1>Đáng chú ý<h1>

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
						<a href="#" class="footer-nav__link">Địa chỉ</a>
					</li>
				</ul>
			</div>

			<div class="footer-nav__col footer-nav__col--whybuy">
				<div class="footer-nav__heading">Tại sao là chúng tôi</div>
				<ul class="footer-nav__list">
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Giao hàng &amp; returns</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Bảo mật vận chuyển</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Chứng chỉ</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Các giải thưởng</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Giá trị lòng tin</a>
					</li>
				</ul>
			</div>

			<div class="footer-nav__col footer-nav__col--account">
				<div class="footer-nav__heading">Tài khoản của bạn</div>
				<ul class="footer-nav__list">
        <li class="footer-nav__item">
        <a href="checkout.php" class="footer-nav__link">Đăng nhập</a>
        </li>
        <li class="footer-nav__item">
          <a href="customer_register.php" class="footer-nav__link">Đăng ký</a>
        </li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Xem giỏ hàng</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Xem hướng dẫn</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Theo dõi đơn hàng</a>
					</li>
          <li class="footer-nav__item">
          <a href="customer/my_account.php" class="footer-nav__link">Thay đổi thông tin</a>
          </li>
				</ul>
			</div>

			<div class="footer-nav__col footer-nav__col--contacts">
				<div class="footer-nav__heading">Thông tin liên lạc</div>
				<address class="address">
				Trụ sở chính: Abcxyz.<br>
				Hà Nội-Việt Nam.
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
				Web Bán Hoa By Nguyễn Thùy Linh
			</div>
		</div>
	</div>
</footer>
</body>

</html>
