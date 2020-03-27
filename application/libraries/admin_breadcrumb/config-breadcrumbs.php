<?php


// Home
// $this->dashboardbreadcrumbs->for('dashboard', function ($trail) {
//     $trail->push('Dashboard', route('user.dashboard'));
// });
$this->dashboardbreadcrumbs->for('change_password', function ($trail) {
    // $trail->parent('dashboard');
    $trail->push('Thay doi mat khau', route('admin.change-password'));
});

// Home > Shop 
$this->dashboardbreadcrumbs->for('product', function ($trail) {
    // $trail->parent('dashboard');
    $trail->push('Quan ly san pham', route('admin.product'));
});

$this->dashboardbreadcrumbs->for('order', function ($trail) {
    // $trail->parent('dashboard');
    $trail->push('Quan ly don hang', route('admin.order'));
});

$this->dashboardbreadcrumbs->for('edit-order', function ($trail) {
    $trail->parent('order');
    $trail->push('Edit Order', route('admin.order.edit'));
});

$this->dashboardbreadcrumbs->for('profile', function ($trail) {
    // $trail->parent('dashboard');
    $trail->push('Thong tin tai khoan', route('admin.my-account'));
});

$this->dashboardbreadcrumbs->for('users_manager', function ($trail) {
    // $trail->parent('dashboard');
    $trail->push('Danh sach thanh vien', route('admin.users'));
});




