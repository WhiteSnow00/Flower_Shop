</head>

<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Chào mừng";
          }
          else
          {
              echo "Chào mừng:  " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> món
          </a>
        </div>

        <ul class="login">

<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="customer_register.php" class="login__link">Đăng ký</a>';
}
?>
</li>

<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="checkout.php" class="login__link">Đăng nhập</a>';
}
  else
  {
      echo '<a href="logout.php" class="login__link">Đăng xuất</a>';
  }
?>

</li>
</ul>

      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="index.php">
            <img class="logo__img" src="images/logo.png" alt="logo" width="237" height="32">
          </a>
        </div>

        <nav class="main-nav">

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">
                Cửa hàng
              </a>
            </li>

          <li class="categories__item">
              <a class="categories__link" href="customer/my_account.php?my_orders">
                Tài khoản
                <i class="icon-down-open-1"></i>
              </a>
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Cài đặt tài khoản</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="customer/my_account.php?my_wishlist" class="dropdown__link">Danh sách mong muốn</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="cart.php" class="dropdown__link">Giỏ hàng</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="cart.php" class="dropdown__link">Xem thẻ mua hàng</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="customer/my_account.php?edit_account" class="dropdown__link">Sửa thông tin tài khoản</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="customer/my_account.php?change_pass" class="dropdown__link">Thay đổi mật khẩu</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="customer/my_account.php?delete_account" class="dropdown__link">Xóa tài khoản</a>
                      </li>
                    </ul>
                  </div>
                </div>

              </div>

            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>
