<!-- Header Area Start -->

<header class="header-area clearfix">
    <!-- Close Icon -->
    <div class="nav-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <!-- Logo -->
    <div class="logo">
        <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
    </div>
    <!-- Amado Nav -->
    <nav class="amado-nav">
        <ul>
            <li <?= ($this->uri->segment(1) == '') ? 'class="active"' : '' ?>><a href="index.html">Home</a></li>
            <li <?= ($this->uri->segment(1) === 'shop') ? 'class="active"' : '' ?>><a href="<?= base_url('shop') ?>">Shop</a></li>
            <!-- <li><a href="product-details.html">Product</a></li> -->
            <li <?= ($this->uri->segment(1) === 'cart') ? 'class="active"' : '' ?>><a href="<?= base_url('cart') ?>">Cart</a></li>
            <li <?= ($this->uri->segment(1) === 'contact') ? 'class="active"' : '' ?>><a href="<?= base_url('contact') ?>">Contact</a></li>
        </ul>
    </nav>
    <!-- Button Group -->
    <div class="amado-btn-group mt-30 mb-100">
        <a href="#" class="btn amado-btn mb-15">%Discount%</a>
        <a href="#" class="btn amado-btn active">New this week</a>
    </div>
    <!-- Cart Menu -->
    <div class="cart-fav-search mb-100">
        <a href="<?= route('cart') ?>" class="cart-nav"><img id="imgCart" src="img/core-img/cart.png" alt=""> Cart <span>(<?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?>)</span></a>
        <a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favourite</a>
        <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
        
        

        <?php if(isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true) { ?>
        <div class="btn-group">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="img/core-img/user21.png" alt=""> <?= (isset($_SESSION['userInfo'])) ? $_SESSION['userDetails']['email'] : 'Unknown' ?>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item2" href="#">Thông tin tài khoản</a>
            <a class="dropdown-item2" href="#">Đơn hàng của tôi</a>
            <a class="dropdown-item2" href="#">test</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item2" href="<?= route('account.logout') ?>">Đăng xuất</a>
        </div>
    </div>
    <?php } else { ?>
        <a href="<?= route('user.login') ?>" class="search-nav"><img src="img/core-img/user21.png" alt=""> <?= (isset($_SESSION['userInfo'])) ? $_SESSION['userInfo']['email'] : 'Login' ?></a>
        <?php } ?>
</div>
<!-- Social Button -->
<div class="social-info d-flex justify-content-between">
    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
</div>
</header>

<!-- Header Area End -->