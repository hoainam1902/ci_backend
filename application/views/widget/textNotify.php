<?php
if($this->session->userdata('message') !== null) {
	foreach ($this->session->userdata('message') as $type => $text) {
		echo '<div class="container-fluid px-0">
		<div class="alert alert-' . $type . ' alert-dismissible fade show m-0" role="alert">
		' . $text . '
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
		</button>
		</div>
		</div>';
	}
}

?>

<!-- <div class="container-fluid px-0">
	<div class="alert alert-' . $arrayNotify['type'] . ' alert-dismissible fade show m-0" role="alert">
		message test 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div>
</div> -->