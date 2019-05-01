#!/usr/bin/php
<?php
function ft_split($str)
{
    $word = explode(" ", $str);
    $sort_word = array_filter($word, function ($var) {
        return $var != "";
    });
    return $sort_word;
}

$arrr = array();
for ($i = 1; $i < $argc; ++$i)
{
    $arrr = array_merge($arrr, ft_split($argv[$i]));
}
sort($arrr);
foreach ($arrr as $kek) {
    print $kek . "\n";
}