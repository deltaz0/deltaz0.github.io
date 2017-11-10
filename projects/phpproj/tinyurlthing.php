<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>My Example</h1>
<?php
//test it out!
function get_tiny_url($url)  {  
	$ch = curl_init();  
	$timeout = 5;  
	curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
	$data = curl_exec($ch);  
	curl_close($ch);  
	return $data;  
}

$new_url = get_tiny_url('http://notreal.com/fake.html?fakefield=test&what=test');

echo '<h2>Hello World</h2>';

$test = 'blah blah';
//returns http://tinyurl.com/65gqpp
echo '<p>';
echo $test;
echo '</p>';
echo $new_url;
echo $test;
?>
</body>
</html>