<?php
$file = file_get_contents('http://169.254.169.254/latest/meta-data/instance-id', true);
echo "This is the about ".$file."!!";
?>
