<?php
$dir = opendir('../img/releases/');
$total = 0;

while($file = readdir($dir)) {
	if($file == '.' || $file == '..' || $file == '.DS_Store') {
        continue;
    }
    $total++;
}

echo $total/2;
?>