<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Delta Z</title>
	<link href="/default.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="a"><!--<img src="/images/rain3sm.jpg" />--></div>

<div class="b">
<div class="c">
<a href="/">
<div class="logo">
<img src="/images/dzlogo2.png" />
<p>Samuel B Johnson</p>
</div>
</a>
<div class="navbar">
<div class="navcontents">
<ul id="drop-nav">
  <a href="/blog"><li><h4 class="nav">BLOG</h4></li></a>
  <a href="/music"><li><h4 class="nav">MUSIC</h4></li></a>
  <a href="#"><li><h4 class="nav">RESEARCH</h4>
  <?php researchmenu() ?>
  </li></a>
  <a href="#"><li><h4 class="nav">PROJECTS</h4>
  <?php projectsmenu() ?>
  </li></a>
  <a href="/cv"><li><h4 class="nav">CV</h4></li></a>
</ul>

</div>
</div>
</div>

<div class="flashcontainer">
<div class="fleft"></div>

<div class="fright"></div>
</div>
</div>

<div class="midcontain">

<div class="blackbox"></div>
<div class="d">
<div class="innerbox">

<?php
function researchmenu() {
?>
<ul>
      <a href="/research/neuralnet.php"><li><h4 class="subnav">NEURAL NETS</h4></li></a>
      <a href="/research/morph.php"><li><h4 class="subnav">AUDIO-IMAGE MORPH</h4></li></a>
      <a href="/research/wavenet.php"><li><h4 class="subnav">WAVENET</h4></li></a>
      <a href="/research/unityproject"><li><h4 class="subnav">GAME AUDIO</h4></li></a>
      <a href="/research/unityprojectad"><li><h4 class="subnav">PROJECT AD</h4></li></a>
      <a href="/research/unityprojectfi"><li><h4 class="subnav">PROJECT FI</h4></li></a>
      <a href="/research/unityprojectnoise"><li><h4 class="subnav">PROJECT NOISE</h4></li></a>
      <a href="/research/unitysoundviz"><li><h4 class="subnav" id="last">PROJECT VIZ</h4></li></a>	
</ul>
<?php	
}
?>
<?php
function projectsmenu() {
?>
<ul>
      <a href="/projects/xrezvrlogosample.php"><li><h4 class="subnav">LOGO SAMPLE</h4></li></a>
      <a href="/projects/sequencer"><li><h4 class="subnav" id="last">SEQUENCER</h4></li></a>	  
</ul>
<?php	
}
?>