<?php
if(isset($_SESSION['error-message'])) {
foreach ($_SESSION['error-message'] as $type => $text) {
	echo '<div class="container-fluid px-0">
	<div class="alert alert-' . 'danger' . ' alert-dismissible fade show m-0" role="alert">
	' . $text . '
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span>
	</button>
	</div>
	</div>';
}
}
if(isset($_SESSION['success-message'])) {
foreach ($_SESSION['success-message'] as $type => $text) {
	echo '<div class="container-fluid px-0">
	<div class="alert alert-' . 'success' . ' alert-dismissible fade show m-0" role="alert">
	' . $text . '
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span>
	</button>
	</div>
	</div>';
}
}