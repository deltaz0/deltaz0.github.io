<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );
include_once('header.php');
?>
<?php
define('WP_USE_THEMES', false);
require('wp/wp-blog-header.php');
?>
<h2>Blog</h2>
<?php
$number_of_posts = 5;
$args = array( 'numberposts' => $number_of_posts );
$recent_posts = wp_get_recent_posts( $args );
foreach( $recent_posts as $recent_post ){
echo "<div style='height: 40px;'></div><div class='blogBox'><span class='blogEntry'>".$recent_post['post_title']."<br>";
echo $recent_post['post_date']."</span>";
echo  $recent_post['post_content']."</div><div style='height: 40px;'></div>";
}
?>
<?php
include_once('footer.php');
?>