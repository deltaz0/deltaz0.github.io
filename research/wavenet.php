<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );
include_once('header.php');
?>
<h2>WaveNet</h2>
<p>Samples of progress on new neural network project and audio style learning/synthesis.</p>
<hr/>
<h4>Original sound:</h4>
<audio class="centerer" src="/sounds/bardm.wav" controls></audio>
<p>Failed results:</p>
<audio class="centerer" src="/sounds/neurobard.wav" controls></audio>
<hr/>
<h4>Original sound with cut alphabet size:</h4>
<audio class="centerer" src="/sounds/bnn.wav" controls></audio>
<p>Failed results:</p>
<audio class="centerer" src="/sounds/bns.wav" controls></audio>
<audio class="centerer" src="/sounds/bnse.wav" controls></audio>
<audio class="centerer" src="/sounds/bnsf.wav" controls></audio>
<hr/>
<h4>Original sound with cut alphabet size and cut sample rate (by averaging) (/16):</h4>
<audio class="centerer" src="/sounds/bardmbit16old.wav" controls></audio>
<p>Partially successful results:</p>
<audio class="centerer" src="/sounds/bardmbit16output1.wav" controls></audio>
<audio class="centerer" src="/sounds/bardmbit16output2.wav" controls></audio>
<audio class="centerer" src="/sounds/bardmbit16output3.wav" controls></audio>
<hr/>
<h4>Original (cut alphabet and /16 sample) this time with lerp:</h4>
<audio class="centerer" src="/sounds/bardmbit16new.wav" controls></audio>
<p>More successful results:</p>
<audio class="centerer" src="/sounds/bardmbit16output1new.wav" controls></audio>
<hr/>
<h4>Original with all processing but this time (/8):</h4>
<audio class="centerer" src="/sounds/bardmbit8.wav" controls></audio>
<p>More successful results:</p>
<audio class="centerer" src="/sounds/bardmbit8output1.wav" controls></audio>
<audio class="centerer" src="/sounds/bardmbit8output2.wav" controls></audio>
<p>(Interesting to note, early epochs of network training gives bad results even with lower training loss):</p>
<audio class="centerer" src="/sounds/bardmbit8output3.wav" controls></audio>
<hr/>
<h4>Original with all processing but this time (/2):</h4>
<audio class="centerer" src="/sounds/bardmbit2.wav" controls></audio>
<p>Partially successful results:</p>
<audio class="centerer" src="/sounds/bardmbit2output1.wav" controls></audio>
<audio class="centerer" src="/sounds/bardmbit2output4.wav" controls></audio>
<?php
include_once('footer.php');
?>