

<div class="shop_sidebar_area">

    <!-- ##### Single Widget ##### -->
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Catagories</h6>

        <!--  Catagories  -->
        <div class="catagories-menu">
            <ul>
                <!-- <li class="active"><a href="#">Chairs</a></li> -->
                <?php foreach($categories as $category) { ?>
                <li <?= (isset($_GET['category']) && $_GET['category'] == $category->slug) ? 'class="active"' : '' ?>><a href="<?= route('shop', ['category' => $category->slug]) ?>"><?= $category->name ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <!-- ##### Single Widget ##### -->
    

    <!-- ##### Single Widget ##### -->
    <div class="widget color mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Color</h6>

        <div class="widget-desc">
            <ul class="d-flex">
                <li><a href="#" class="color1"></a></li>
                <li><a href="#" class="color2"></a></li>
                <li><a href="#" class="color3"></a></li>
                <li><a href="#" class="color4"></a></li>
                <li><a href="#" class="color5"></a></li>
                <li><a href="#" class="color6"></a></li>
                <li><a href="#" class="color7"></a></li>
                <li><a href="#" class="color8"></a></li>
            </ul>
        </div>
    </div>

    <!-- ##### Single Widget ##### -->
    <div class="widget price mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Price</h6>

        <div class="widget-desc">
            <div class="slider-range">
                <div data-min="10" data-max="1000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1000" data-label-result="">
                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                </div>
                <div class="range-price">$10 - $1000</div>
            </div>
        </div>
    </div>
</div>

<div class="amado_product_area section-padding-100">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                    <!-- Total Products -->
                    <div class="total-products">
                        <p>Showing 1-8 0f 25</p>
                        <div class="view d-flex">
                            <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- Sorting -->
                    <div class="product-sorting d-flex">
                        <div class="sort-by-date d-flex align-items-center">
                            <p>Sort by &nbsp;</p>
                            <form action="" method="get">
                                <select onchange="javascript:location.href =  ((this.value == 'default') ? '<?=  route('shop', (isset($_GET['category']) ? array('category' => $_GET['category']) : array())) ?>' : ('<?= route('shop', (isset($_GET['category']) ? array('category' => $_GET['category'], 'sort' => '') : array('sort', ''))) ?>' + this.value))" name="select" id="sortBydate">
                                    <option value="default" <?= (! isset($_GET['sort'])) ? 'selected' : '' ?>>Default</option>
                                    <option value="date" <?= (isset($_GET['sort']) && $_GET['sort'] == 'date') ? 'selected' : '' ?>>Newest</option>
                                    <option value="priceasc" <?= (isset($_GET['sort']) && $_GET['sort'] == 'priceasc') ? 'selected' : '' ?>>Price : Low to High</option>
                                    <option value="pricedesc" <?= (isset($_GET['sort']) && $_GET['sort'] == 'pricedesc') ? 'selected' : '' ?>>Price : High to Low</option>
                                    <option value="popular" <?= (isset($_GET['sort']) && $_GET['sort'] == 'popular') ? 'selected' : '' ?>>Popular</option>
                                </select>
                            </form>
                        </div>
                        <!-- <div class="view-product d-flex align-items-center">
                            <p>View</p>
                            <form action="#" method="get">
                                <select name="select" id="viewProduct">
                                    <option value="value">12</option>
                                    <option value="value">24</option>
                                    <option value="value">48</option>
                                    <option value="value">96</option>
                                </select>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach($dataContent['products'] as $product) { ?>
            <!-- Single Product Area -->
            <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                <div class="single-product-wrapper">
                    <!-- Product Image -->
                    <div class="product-img">
                        <img src="img/product-img/product1.jpg" alt="">
                        <!-- Hover Thumb -->
                        <img class="hover-img" src="img/product-img/product2.jpg" alt="">
                    </div>

                    <!-- Product Description -->
                    <div class="product-description d-flex align-items-center justify-content-between">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price"><?= $product->price ?></p>
                            <a href="<?= route('', $product->slug) ?>">
                                <h6><?= $product->name ?></h6>
                            </a>
                        </div>
                        <!-- Ratings & Cart -->
                        <div class="ratings-cart text-right">
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="cart">
                                <a href="cart.html" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            
            

            
        </div>

        <div class="row">
            <div class="col-12">

                <!-- Pagination -->
                <?=  $paging ?>
               <!--  <nav aria-label="navigation">
                    <ul class="pagination justify-content-end mt-50">
                        <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                        <li class="page-item"><a class="page-link" href="#">02.</a></li>
                        <li class="page-item"><a class="page-link" href="#">03.</a></li>
                        <li class="page-item"><a class="page-link" href="#">04.</a></li>
                    </ul>
                </nav> -->
            </div>
        </div>
    </div>
</div>
</div>
    <!-- ##### Main Content Wrapper End ##### -->

