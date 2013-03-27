<?php

$files = array();

$dir = opendir('../img/releases/');
while ($file = readdir($dir)) 
{
	if ($file == '.' || $file == '..' || $file == '.DS_Store') {
        continue;
    }

    $files[] = $file;
}

echo json_encode($files);

?>