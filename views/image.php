<?php

$filename = "/usr/clearos/apps/base/image.png";
$handle = fopen($filename, "rb");
$contents = fread($handle, filesize($filename));

fclose($handle);
 
header("content-type: image/jpeg");
 
echo $contents;