<?php
    function ft_split($str)
    {
        $word = explode(" ", $str);
        $sort_word = array_filter($word, function ($var) {
            return $var != "";
        });
        sort($sort_word);
        return ($sort_word);
    }