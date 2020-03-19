<?php


// Home
// $this->dashboardbreadcrumbs->for('dashboard', function ($trail) {
//     $trail->push('Dashboard', route('user.dashboard'));
// });
$this->dashboardbreadcrumbs->for('change_password', function ($trail) {
    // $trail->parent('dashboard');
    $trail->push('Thay doi mat khau', route('user.change-password'));
});

// Home > Shop 
$this->dashboardbreadcrumbs->for('personal_info', function ($trail) {
    // $trail->parent('dashboard');
    $trail->push('Personal Information', route('user.profile'));
});

$this->dashboardbreadcrumbs->for('order', function ($trail) {
    // $trail->parent('dashboard');
    $trail->push('Order', route('dashboard.order'));
});

$this->dashboardbreadcrumbs->for('edit-order', function ($trail) {
    $trail->parent('order');
    $trail->push('Edit Order', route('dashboard.order.edit'));
});



