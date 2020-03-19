<?php
foreach ($errors as $field => $text) {
	echo '<div class="container-fluid px-0">
	<div class="alert alert-' . 'danger' . ' alert-dismissible fade show m-0" role="alert">
	' . $text . '
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span>
	</button>
	</div>
	</div>';
}
