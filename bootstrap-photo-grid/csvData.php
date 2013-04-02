<?php
$file = fopen("releases.csv","r");
$csvRecords = array();

if(($handle = $file) !== FALSE) {
    while(($data = fgetcsv($handle, ",")) !== FALSE) {
    	
        $record = array('release' => $data[0],
        				'artist' => $data[1],
        				'album' => $data[2],
        				'details' => $data[3],
                        'thumb' => $data[4],
                        'full' => $data[5],
                        'url' => $data[6]);

        array_push($csvRecords, $record);
    }
    fclose($handle);
}

echo json_encode($csvRecords);
?>