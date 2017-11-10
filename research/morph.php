<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );
include_once('header.php');
?>
<h2>Audio Image Morph</h2>
<p>I decided to experiment with an admittedly klugey shortcut to an admittedly not very useful process.</p>
<p>Again, I like the artistic potential. One of my goals is to bring the dream learning process to audio. The shortcut is to make the audio fit the model. I started off by converting audio into an image. A common way to do this is a spectrograph. An advantage of a spectrograph is that the program I use to reverse the process (image to audio) follows roughly the same dimensions as a spectrograph.</p>
<h4>The latest iteration</h4>
<p>I chopped this sound file from some random folder from one of my other projects:</p>
<audio class="centerer" src="/sounds/rev.wav" controls></audio>
<p>Converting it to a spectrograph created this image:</p>
<img class="centerer" style="width:700px" src="/images/r.png" />
<p>After tons of parameter tweaking, I was able to get the image->audio program to 'read' the created image about as close as I could. This is what that sounds like:</p>
<audio class="centerer" src="/sounds/revr.wav" controls></audio>
<p>I then ran the spectrograph through darknet's nightmare function (darknet is a cool nn image project). I chose the parameters using the scientific process of picking some numbers that might look cool. What it created was actually really cool, at least I think so:</p>
<img class="centerer" style="width:700px" src="/images/rn.png" />
<p>This wasn't enough though. Next I decided it could be really cool to isolate the changes that the network made from the original image, or in terms of a transfer function what we in the audio world would call the wet signal. I used imagemagick to subtract the images, resulting in:</p>
<img class="centerer" style="width:700px" src="/images/rm.png" />
<p>Sonifying this image leaves us with the isolated imprint of the transfer function. A way to listen to the 'space' of the dream network itself. I expected this to be scrambled nonsense. What I got was pretty cool:</p>
<audio class="centerer" src="/sounds/revrm.wav" controls></audio>
<?php
include_once('footer.php');
?>