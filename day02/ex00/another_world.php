#!/usr/bin/php
<?php
if ($argc > 2) {
    $arr = preg_split("@[\t ]+@", $argv[1]);
    $arr = implode(" ", $arr);
    print $arr . "\n";
}
