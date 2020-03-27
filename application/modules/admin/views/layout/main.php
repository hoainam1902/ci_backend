<!DOCTYPE html>


<html lang="en">

<?php 
$folderView = strtok($view, '/');
$pathHead = $folderView . '/head.php';
$pathFolderView = APPPATH . 'modules/admin/views/';
if(file_exists($pathFolderView . $pathHead)) {
	$this->load->view($pathHead);
} else {
	$this->load->view('_part/head'); 
}
?>


<?php
$pathMenu = $folderView . '/menu.php';
if(file_exists($pathFolderView . $pathMenu)) {
	$this->load->view($pathMenu);
} else {
	$this->load->view('_part/menu'); 
}

$this->load->view($view);

$pathFooter = $folderView . '/footer.php';
if(file_exists($pathFolderView . $pathFooter)) {
	$this->load->view($pathFooter);
} else {
	$this->load->view('_part/footer'); 
}
?>



</body>
<!-- end::Body -->
</html>