<?php

header("content-type: application/json");

$t=filter_input(INPUT_GET, 't', FILTER_SANITIZE_STRING);
$v=filter_input(INPUT_GET, 'v', FILTER_SANITIZE_STRING);
$u=filter_input(INPUT_GET, 'u', FILTER_SANITIZE_NUMBER_INT);

$v2=preg_replace('/^pr[0-9]+-/', '', $v); // subtract "prXXXX-"
$v2=preg_replace('/^firmware-/', '', $v2); // subtract "firmware-"

if(!file_exists('firmware/' . $v . '/firmware-' . $t . '-' . $v2 . '.bin')) {
  $v2=substr($v,1) . "-d";
}
if(!file_exists('firmware/' . $v . '/firmware-' . $t . '-' . $v2 . '.bin')) {
  // replace underscores with dots
  $t = str_replace('_', '.', $t);
}

require_once realpath(__DIR__ . '/..') . '/config.php';

// Only include the LittleFS bin if the device should be wiped ($u=2)

if (file_exists('firmware/' . $v . '/system-info.bin')) {
  // old V1 layout, install and update
  echo '{
      "name": "' . $t . '",
      "version": "' . $v . '",
      "new_install_improv_wait_time": 0,
      "new_install_prompt_erase": true,
      "builds": [
        {
          "chipFamily": "' . $chipFamily[$t] . '",
          "parts": [
            { "path": "firmware/' . $v . '/system-info.bin", "offset": 4096 },
            { "path": "firmware/' . $v . '/firmware-' . $t . '-' . $v2 . '.bin", "offset": 65536 }' . (($u == 2) ? ',
            { "path": "firmware/' . $v . '/littlefs-' . $v2 . '.bin", "offset": 2818048 }' : '') . '
          ]
        }
      ]
    }';

} elseif ($u == 2) {
  // new V2 layout install. Also wipe NVRAM
  echo '{
    "name": "' . $t . '",
    "version": "' . $v . '",
    "new_install_improv_wait_time": 0,
    "builds": [
      {
        "chipFamily": "' . $chipFamily[$t] . '",
        "parts": [
          { "path": "firmware/' . $v . '/firmware-' . $t . '-' . $v2 . '.bin", "offset": 0 },
          { "path": "firmware/' . $v . '/' . (($chipFamily[$t] == 'ESP32') ? 'bleota.bin' : 'bleota-s3.bin') . '", "offset": 2490368 },
          { "path": "firmware/' . $v . '/littlefs-' . $v2 . '.bin", "offset": 3145728 }
        ]
      }
    ]
  }';
} elseif (file_exists('firmware/' . $v . '/firmware-' . $t . '-' . $v2 . '-update.bin')) {
  // new layout update (2.0.6+)
  echo '{
    "name": "' . $t . '",
    "version": "' . $v . '",
    "new_install_improv_wait_time": 0,
    "new_install_prompt_erase": true,
    "builds": [
      {
        "chipFamily": "' . $chipFamily[$t] . '",
        "parts": [
          { "path": "firmware/' . $v . '/firmware-' . $t . '-' . $v2 . '-update.bin", "offset": 65536 }
        ]
      }
    ]
  }';
} else {
  // update with new-old buggy layout (prior to 2.0.6)
  echo '{
    "name": "' . $t . '",
    "version": "' . $v . '",
    "new_install_improv_wait_time": 0,
    "new_install_prompt_erase": true,
    "builds": [
      {
        "chipFamily": "' . $chipFamily[$t] . '",
        "parts": [
          { "path": "firmware/' . $v . '/firmware-' . $t . '-' . $v2 . '.bin", "offset": 0 }
        ]
      }
    ]
  }';
}