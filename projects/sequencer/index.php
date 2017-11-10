<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );
include_once('header.php');
?>
<h2>Sequencer</h2>
<iframe id="scaleframer" width="100%" height="450" scrolling="no" frameborder="no" src="http://deltaz.us/projects/sequencer/webaudiothing.html"></iframe>
<?php
include_once('footer.php');
?>