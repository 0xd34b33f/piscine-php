#!/usr/bin/php
<?php
if ($argc > 1) {
    date_default_timezone_set("Europe/Paris");
    $date = $argv[1];
    $find = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    $replace = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $find_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $replace_days = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
    $date = str_replace($find, $replace, strtolower($date));
    $date = str_replace($find_days, $replace_days, strtolower($date));
    if (($stamp = strtotime($date)) == false) {
        print "Wrong Format\n";
    } else
        print $stamp;
}