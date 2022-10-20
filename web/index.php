<?php

$devices=[  'rak11200',
            'tlora-v2',
            'tlora-v1',
            'tlora_v1_3',
            'tlora-v2-1-1.6',
            'tbeam',
            'heltec-v1',
            'heltec-v2.0',
            'heltec-v2.1',
            'tbeam0.7',
            'meshtastic-diy-v1',
            'nano-g1',
            'station-g1',
            'm5stack-core',
            'm5stack-coreink',
            'tbeam-s3-core'
        ];

$radios="";
$ver="";

sort($devices);

foreach ($devices as $device){
    $radios .= '<option value="' . $device . '" /> ' . ucfirst($device) . '</option>';
}

require_once __DIR__ . '/../vendor/autoload.php';

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use Cache\Adapter\Filesystem\FilesystemCachePool;

$filesystemAdapter = new Local(__DIR__ . '/../');
$filesystem        = new Filesystem($filesystemAdapter);
$pool              = new FilesystemCachePool($filesystem);
$client            = new \Github\Client();

$client->addCache($pool);

$releases = $client->api('repo')->releases()->all('meshtastic', 'Meshtastic-device');

foreach ($releases as $release){
    foreach($release['assets'] as $asset){
        if (strpos($asset['browser_download_url'], '/firmware-1.3')){
            $display[$release['tag_name']] = $release;
            $versions[$release['tag_name']] = $release['tag_name'];
            if (!file_exists(__DIR__  . '/firmware/' . $asset['name'])){
                file_put_contents(__DIR__  . '/firmware/' . $asset['name'], file_get_contents($asset['browser_download_url']));
            }
            if (!is_dir(__DIR__  . '/firmware/' . $release['tag_name'])) {
                exec('unzip ' . __DIR__  . '/firmware/' . $asset['name'].' -d ' . __DIR__  . '/firmware/' . $release['tag_name']);
            }
        }
    }
}

rsort($versions);

foreach ($versions as $version){
    $ver .= '<option value="'  .$version . '" /> ' . ucfirst($version) . '</option>';
}

$template=strtr(file_get_contents('index.tpl.html'), array('###radios###'=>$radios, '###versions###'=>$ver));

echo $template;
$client->removeCache();