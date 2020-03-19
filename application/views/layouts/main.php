<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Ecommerce | Home</title>
    <base href="<?= asset() ?>">
    <!-- Favicon  -->
    <link rel="icon" href="<?= asset('img/core-img/favicon.ico') ?>">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?= asset('css/core-style.css') ?>">
    <link rel="stylesheet" href="<?= asset('style.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/main.css') ?>">

</head>
<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

    <?php $this->load->view('partials/head', $head_data); ?>

    <?php $this->load->view($sectionContent, $dataContent); ?>

    <?php $this->load->view('partials/footer', $footer_data); ?>

    <?php $this->load->view('partials/extra-js', $extraJS); ?>


</body>
</html>