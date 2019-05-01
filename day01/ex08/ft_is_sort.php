#!/usr/bin/php
<?php
function ft_is_sort($var)
{
    $sorted = $var;
    sort($sorted);
    return ($sorted === $var);
}