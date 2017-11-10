<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );
include_once('header.php');
?>
<p>My Research Projects</p>
<?php researchmenu() ?>
<?php
include_once('footer.php');
?>