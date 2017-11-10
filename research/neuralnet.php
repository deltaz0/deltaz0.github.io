<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );
include_once('header.php');
?>
<h2>Neural Network Project</h2>
<p>In Summer 2015, Google demonstrated a neural network technique which gained a lot of public attention. The project was called Deepdream. The tehcnique involves reversing the function of a neural network image-recognition classifier to manipulate an image rather than analyze it. The resulting images have unique properties. Visually, they have been compared to various altered states of human consciousness. Conceptually, they are the closest thing we have to a computer generating true art. Both of these are interesting when you consider this technique is a very crude replication of what happens in the early visual processing areas of the human brain</p>
<p>I like the artistic potential. A trick that can be done with an image is to render a dream of the image, make a small change such as a slight zoom-in, then render a dream of that. Putting all these into a video results in a cool effect reminiscent of fractal rendering. I'm currently in the stage of playing with parameters and tricks to get cool visually stimulating effects. Lately I've been putting my music over it.</p>
<p>Latest iteration:</p>
<div style="width:560px;height:315px;margin:0 auto;padding-bottom:12px;"><iframe width="560" height="315" src="https://www.youtube.com/embed/rSAV4vcIKSc" frameborder="0" allowfullscreen></iframe></div>
<?php
include_once('footer.php');
?>