<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );
include_once('header.php');
?>
<p>My Other Projects</p>
<?php projectsmenu() ?>
<?php
include_once('footer.php');
?>