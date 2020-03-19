<?php


// Home
$this->breadcrumbs->for('home', function ($trail) {
    $trail->push('Home', route());
});


// Home > Shop 
$this->breadcrumbs->for('shop', function ($trail) {
    $trail->parent('home');
    $trail->push('Shop', route('shop'));
});

// Home > Shop > [Product] 
$this->breadcrumbs->for('product', function ($trail, $product) {
    $trail->parent('shop');
    $trail->push($product->name, route('shop.details', $product->slug));
});