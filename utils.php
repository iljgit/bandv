<?php
function getBack($def="") {
    $ret = $def;
    if ($_GET('back')) {
        $ret = urldecode($_GET('back'));
    }
    return $ret;
}
?>