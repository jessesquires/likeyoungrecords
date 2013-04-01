<?php
$fileList = array();
$dir = opendir('../img/releases/');

while($file = readdir($dir)) {
	if($file == '.' || $file == '..' || $file == '.DS_Store') {
        continue;
    }
    array_push($fileList, $file);
}

$imageList = array();
for($i = 0; $i < count($fileList) - 1; $i+=2) {
	$j = $i + 1;
	$imageRecord = array('full' => $fileList[$i],
						 'thumb' => $fileList[$j]);
	array_push($imageList, $imageRecord);
}

echo json_encode($imageList);
?>