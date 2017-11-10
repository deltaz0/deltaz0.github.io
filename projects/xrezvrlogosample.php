<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );
include_once('header.php');
?>
<style type="text/css">.outbox{ margin:0 auto; width:520px; } .showbox { margin: 0 0; width: 516px; height: 132px; background-color: #fff; overflow: hidden; position: relative; } .showbox img { width: 1200px; height: 750px; animation-duration: 40.0s; animation-name: aslidein; animation-iteration-count: infinite; animation-direction: alternate; } @keyframes aslidein { from { margin-left: 64%; margin-top: 4%; } to { margin-left: -110%; margin-top: -110%; } }
</style>
<h2>Logo Sample</h2>
<p>A logo for a division of the lab where I work:</p>
<div class="outbox" style="margin-top:60px;"><img src="http://www.xrezlab.com/wp-content/uploads/2015/06/xrezlogotransparent_forweb.png" style="position: absolute; z-index:2;" />
<div class="showbox"><img src="http://p1.pichost.me/i/58/1821449.jpg" style="position:absolute; z-index:1;" /></div></div>
<?php
include_once('footer.php');
?>