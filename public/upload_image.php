<?php


$name = $_POST['name'];
$image = $_POST['image'];

$decoded_image = base64_decode("$image");
//$decoded_image
file_put_contents($name.".jpg", $decoded_image);

//echo file_put_contents("test.txt","Hello World. Testing!");