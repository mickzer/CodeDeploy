<?php
$file = file_get_contents('http://169.254.169.254/latest/meta-data/instance-id', true);
echo "Hello there ".$file."!!";
echo "Welcome to my world!!";
?>
