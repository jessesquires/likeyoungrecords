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

asort($imageList);

$images = array();
foreach($imageList as $key=>$val) {
	$f = $val['full'];
	$t = $val['thumb']; 
	//echo "Key = $key, Value = $f : $t <br />";

	array_push($images, $val);
}
//echo "<br /><br />";
echo json_encode($images);
?>