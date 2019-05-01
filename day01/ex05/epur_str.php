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

if ($argc == 2) {
    $arr = ft_split($argv[1]);
    $size = sizeof($arr);
    for ($i = 0; $i < $size; ++$i) {
        print $arr[$i];
        if ($i!= $size -1)
            print " ";
    }
}
print "\n";