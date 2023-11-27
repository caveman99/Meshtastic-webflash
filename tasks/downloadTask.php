<?php

declare(strict_types=1);
/*
|--------------------------------------------------------------------------------------
|  Task File
|--------------------------------------------------------------------------------------
|
| This file basically registers a new task to be executed by Crunz
| To get the list of all frequency and constraint method, you may
| go to this link: https://github.com/crunzphp/crunz#frequency-of-execution
|
*/

use Crunz\Schedule;

$scheduler = new Schedule();
$task = $scheduler->run(function() {
    $radios = [0 => '', 1 => ''];
    $ver = "";
    include_once (realpath(__DIR__ . '/..') . '/config.php' );
    // download releases

$pos=0;
foreach ($json['releases'] as $state => $entry) {
	foreach ($entry as $value){
        $downloadURL = $value['zip_url'];  //http url
        
        $zipFileName = str_replace('?raw=true', '', basename($downloadURL));   // filename.zip
        $fileName = str_replace('.zip','',$zipFileName);  // filename
        
        $all_firmware[$pos] = $fileName;
        $all_states[$pos] = $state;
        $outputPath = realpath(__DIR__ . '/../web/firmware/') . '/' . $zipFileName;
        
        if (!file_exists($outputPath)){
            file_put_contents($outputPath, file_get_contents($downloadURL));
        }
        if (!is_dir(realpath(__DIR__ . '/../web/firmware/') . '/' . $fileName . '/')) {
            exec('unzip ' . $outputPath . ' -d ' . realpath(__DIR__ . '/../web/firmware/') . '/' . $fileName . '/');
        }
        $pos+=1;
    }
}

// download and add PR's to list

foreach ($json['pullRequests'] as $value){
	$prTitles[$pos] = $value['title'];
	$downloadURL = $value['zip_url'];  //http url

	$zipFileName = str_replace('?raw=true', '', basename($downloadURL));   // filename.zip
	
	$fileName = str_replace('.zip','',$zipFileName);  // filename
	
	$all_firmware[$pos] = $fileName;
    $all_states[$pos] = 'pr';
	$outputPath = realpath(__DIR__ . '/../web/firmware/') . '/' . $zipFileName;
	
	if (!file_exists($outputPath)){
		file_put_contents($outputPath, file_get_contents($downloadURL));
	}
	if (!is_dir(realpath(__DIR__ . '/../web/firmware/') . '/' . $fileName . '/')) {
    	exec('unzip ' . $outputPath . ' -d ' . realpath(__DIR__ . '/../web/firmware/') . '/' . $fileName . '/');
    }

	$pos+=1;
}

// iterate firmware dir and erase folders that are not in the releases
$files = scandir(realpath(__DIR__ . '/../web/firmware/'));
foreach ($files as $file){
    if ($file == '.' || $file == '..'){
        continue;
    }
	if  (!in_array ($file, $all_firmware) && is_dir(realpath(__DIR__ . '/../web//firmware/') . '/' . $file)){
		exec('rm -rf ' . realpath(__DIR__ . '/../web/firmware/') . '/' . $file);
	}
	
	if  (!in_array ($file, $all_firmware) && is_file(realpath(__DIR__ . '/../web//firmware/') . '/' . $file . '.zip')){
		unlink(realpath(__DIR__ . '/../web/firmware/') . '/' . $file . '.zip');
	}	
}

});
$task
    ->description('Scan and reload firmware files')
    ->preventOverlapping()
    ->Hourly()
;

return $scheduler;
