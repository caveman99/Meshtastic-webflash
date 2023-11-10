<?php

// get device JSON every hour only
if (!file_exists(__DIR__ . '/cache/device.json') || filemtime(__DIR__ . '/cache/device.json') < time() - 3600) {
    $device = file_get_contents('https://api.meshtastic.org/resource/deviceHardware');
    file_put_contents(__DIR__ . '/cache/device.json', $device);
}
// decode it
$hardware = json_decode(file_get_contents(__DIR__ . '/cache/device.json'), TRUE);

// get releases JSON every hour only
if (!file_exists(__DIR__ . '/cache/releases.json') || filemtime(__DIR__ . '/cache/releases.json') < time() - 3600) {
    $releases = file_get_contents('https://api.meshtastic.org/github/firmware/list');
    file_put_contents(__DIR__ . '/cache/releases.json', $releases);
}
$json = json_decode(file_get_contents(__DIR__ . '/cache/releases.json'), TRUE);

// construct old ChipFamily Array
foreach ($hardware as $key => $device) {
    // remove non-ESP platforms
    if (stripos($device['architecture'], 'ESP') === false) {
        unset($hardware[$key]);
    }else{
        $chipFamily[$device['platformioTarget']] = strtoupper($device['architecture']);
        if ($device['activelySupported'] == FALSE) {
            $device['displayName'] .= ' (unsupported)';
        }
        $radios[$device['activelySupported']] .= '<option value="' . $device['platformioTarget'] . '" /> ' . $device['displayName'] . '</option>';
    }
}
