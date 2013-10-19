<?php
$file = fopen("releases.csv","r");
$csvRecords = array();

if(($handle = $file) !== FALSE) {
    while(($data = fgetcsv($handle, ",")) !== FALSE) {
    	
        $record = array('release' => $data[0],
        				'artist' => $data[1],
        				'album' => $data[2],
        				'details' => $data[3],
                        'url' => $data[4]);

        array_push($csvRecords, $record);
    }
    fclose($handle);
}

echo json_encode($csvRecords);
?>