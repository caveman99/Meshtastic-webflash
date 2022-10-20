<?php

if (!isset($_POST['button-1666093279008'])) {

    echo file_get_contents('oem.tpl.html');

} else {

    require_once (realpath(__DIR__ . '/../vendor') . '/autoload.php');

    $check = getimagesize($_FILES["file-1666093084802"]["tmp_name"]);

    if ($check["mime"] == "image/xbm") {
        $image = imagecreatefromxbm($_FILES["file-1666093084802"]["tmp_name"]);
        $raw = file_get_contents($_FILES["file-1666093084802"]["tmp_name"]);
        if (preg_match("#{(.*?)}#s", $raw, $arr)) {
            $bytes = explode(",", $arr[1]);
            $cleanPixels = "";
            foreach ($bytes as $pixel) {
                $cleanPixels .= chr(hexdec(preg_replace('/\s+/', '', $pixel)));
            }
        }
    }

    $key=preg_replace('/[^0-9a-fA-F]/', '', $_POST['text-1666093173811']);

    if ((strlen($key) != 32) && (strlen($key) != 64) && (strlen($key) != 0)){
        die ("AES Key has the wrong size");
    } else {
        $key=str_split($key, 2);
        $cleankey = "";
        foreach ($key as $byte) {
            $cleankey .= chr(hexdec($byte));
        }
    }

    $OEM = new OEMStore();
    $filename = "oem.proto";

    $OEM->setOemIconWidth(imagesx($image));
    $OEM->setOemIconHeight(imagesy($image));
    $OEM->setOemIconBits($cleanPixels);
    $OEM->setOemFont($_POST['select-1666093140788']);
    $OEM->setOemText($_POST['text-1666093043669']);
    $OEM->setOemAesKey($cleankey);
    
    $proto = $OEM->serializeToString($cleankey);

    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($filename));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . strlen($proto));
    echo $proto;
}