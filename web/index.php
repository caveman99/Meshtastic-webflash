<?php

$radios = [0 => '', 1 => ''];
$ver = "";

require_once realpath(__DIR__ . '/..') . '/config.php';

rsort($radios);

// download releases

$pos=0;
foreach ($json['releases'] as $state => $entry) {
	foreach ($entry as $value){
        $downloadURL = $value['zip_url'];  //http url
        
        $zipFileName = str_replace('?raw=true', '', basename($downloadURL));   // filename.zip
        $fileName = str_replace('.zip','',$zipFileName);  // filename
        
        $all_firmware[$pos] = $fileName;
        $all_states[$pos] = $state;
        
        $pos+=1;
    }
}

uasort($all_firmware, 'version_compare');
$all_firmware = array_reverse($all_firmware, TRUE);

// download and add PR's to list

foreach ($json['pullRequests'] as $value){
	$prTitles[$pos] = $value['title'];
	$downloadURL = $value['zip_url'];  //http url

	$zipFileName = str_replace('?raw=true', '', basename($downloadURL));   // filename.zip
	$fileName = str_replace('.zip','',$zipFileName);  // filename
	
	$all_firmware[$pos] = $fileName;
    $all_states[$pos] = 'pr';

	$pos+=1;
}

// Add all options to dropdown

foreach ($all_firmware as $pos => $fw){
	if ($all_states[$pos] == 'alpha'){
		$ver .= '<option value="' . $fw . '" />V'. substr($fw,9) . ' alpha' . '</option>';
    }elseif ($all_states[$pos] == 'stable'){
		$ver .= '<option value="' . $fw . '" />* V'. substr($fw,9) . ' beta' . '</option>';
	}else{
        $prNumber = substr($fw, 2, 4);
        $prVersion = substr($fw, 16);
		$ver .= '<option value="' . $fw . '" />PR '. $prNumber . ' ' . $prVersion . ' - '. $prTitles[$pos] . '</option>';
	}
	
}

$template=strtr(file_get_contents('index.tpl.html'), array('###radios###'=> implode('',$radios), '###versions###'=>$ver));

echo $template;
