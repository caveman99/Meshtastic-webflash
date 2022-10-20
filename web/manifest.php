<?php
header("content-type: application/json");

$t=filter_input(INPUT_GET, 't', FILTER_SANITIZE_STRING);
$v=filter_input(INPUT_GET, 'v', FILTER_SANITIZE_STRING);
$u=filter_input(INPUT_GET, 'u', FILTER_SANITIZE_INTEGER);
$v2=substr($v,1);

// Only include the LittleFS bin if the device should be wiped ($u=2)

if (file_exists('firmware/' . $v . '/system-info.bin')) {

  echo '{
      "name": "' . $t . '",
      "version": "' . $v . '",
      "new_install_improv_wait_time": 0,
      "builds": [
        {
          "chipFamily": "ESP32",
          "parts": [
            { "path": "firmware/' . $v . '/system-info.bin", "offset": 4096 },
            { "path": "firmware/' . $v . '/firmware-' . $t . '-' . $v2 . '.bin", "offset": 65536 }' . (($u == 2) ? ',
            { "path": "firmware/' . $v . '/littlefs-' . $v2 . '.bin", "offset": 2818048 }' : '') . '
          ]
        }
      ]
    }';

} else {
  echo '{
    "name": "' . $t . '",
    "version": "' . $v . '",
    "new_install_improv_wait_time": 0,
    "builds": [
      {
        "chipFamily": "ESP32",
        "parts": [
          { "path": "firmware/' . $v . '/firmware-' . $t . '-' . $v2 . '.bin", "offset": 0 },
          { "path": "firmware/' . $v . '/bleota.bin", "offset": 2490368 }' . (($u == 2) ? ',
          { "path": "firmware/' . $v . '/littlefs-' . $v2 . '.bin", "offset": 3145728 }' : '') . '
        ]
      }
    ]
  }';
}