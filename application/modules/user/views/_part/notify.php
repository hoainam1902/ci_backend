<?php
if(isset($_SESSION['notify_error'])) {
	foreach ($_SESSION['notify_error'] as $key => $text) {

		?>
		<div class="alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
			<div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
			<div class="alert-text"><?= $text ?></div>
			<div class="alert-close">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true"><i class="la la-close"></i></span>
				</button>
			</div>
		</div>

		<?php
	}
}
?>
<?php
if(isset($_SESSION['notify_success'])) {
	foreach ($_SESSION['notify_success'] as $key => $text) {

		?>
		<div class="alert alert-solid-success alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
			<div class="alert-icon"><i class="fa fa-check-circle"></i></div>
			<div class="alert-text"><?= $text ?></div>
			<div class="alert-close">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true"><i class="la la-close"></i></span>
				</button>
			</div>
		</div>

		<?php
	}
}
?>