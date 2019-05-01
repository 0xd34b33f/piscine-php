#!/usr/bin/php
<?php
if ($argc > 1) {
    $str = explode(" ", $argv[1]);
    $str = array_filter($str, function ($var) {
        return $var != "";
    });
    for ($i = sizeof($str) -1; $i > 0; $i--) {
        print $str[$i]." ";
    }
    print $str[0]."\n";
}