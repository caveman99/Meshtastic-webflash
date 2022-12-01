<?php

require_once realpath(__DIR__ . '/..') . '/config.php';

$radios="";
$ver="";

ksort($chipFamily);

foreach ($chipFamily as $device => $family){
    $radios .= '<option value="' . $device . '" /> ' . ucfirst($device) . '</option>';
}

require_once realpath(__DIR__ . '/../vendor') . '/autoload.php';

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use Cache\Adapter\Filesystem\FilesystemCachePool;

$filesystemAdapter = new Local(__DIR__ . '/../');
$filesystem        = new Filesystem($filesystemAdapter);
$pool              = new FilesystemCachePool($filesystem);
$client            = new \Github\Client();

$client->addCache($pool);

$releases = $client->api('repo')->releases()->all('meshtastic', 'firmware');

foreach ($releases as $release){
    foreach($release['assets'] as $asset){
        if (strpos($asset['browser_download_url'], '/firmware-1.3') || strpos($asset['browser_download_url'], '/firmware-2')){
            $display[$release['tag_name']] = $release;
            $versions[$release['tag_name']] = $release['tag_name'];
            if (!file_exists(__DIR__  . '/firmware/' . $asset['name'])){
                file_put_contents(__DIR__  . '/firmware/' . $asset['name'], file_get_contents($asset['browser_download_url']));
            }
            if (!is_dir(__DIR__  . '/firmware/' . $release['tag_name'])) {
                exec('unzip ' . __DIR__  . '/firmware/' . $asset['name'] . ' -d ' . __DIR__  . '/firmware/' . $release['tag_name']);
            }
        }
    }
}

// iterate firmware dir and erase folders that are not in the releases
$files = scandir(__DIR__  . '/firmware/');
foreach ($files as $file){
    if (is_dir(__DIR__  . '/firmware/' . $file) && !array_key_exists($file, $versions)){
        exec('rm -rf ' . __DIR__  . '/firmware/' . $file);
    }
    if (is_file(__DIR__  . '/firmware/firmware-' . substr($file,1) . '.zip') && !array_key_exists($file, $versions)){
        unlink(__DIR__  . '/firmware/firmware-' . substr($file,1) . '.zip');
    }
}

rsort($versions);

foreach ($versions as $version){
    $ver .= '<option value="' . $version . '" /> ' . ucfirst($version) . (($display[$version]['prerelease'] == 1) ? " alpha" : " beta") . '</option>';
}

$template=strtr(file_get_contents('index.tpl.html'), array('###radios###'=>$radios, '###versions###'=>$ver));

echo $template;
$client->removeCache();