<?php

$str = $_POST['inputValue'];

function replaceVowels($str){

    $letters = array (
        'aa' => 'a',
        'ee' => 'e',
        'oo' => 'o',
        'uu' => 'u',
        'ii' => 'i',
    );

    foreach($letters as $key){
        if(strstr($str, $key, true)){
            $keys = array_keys($letters);
            $values = array_values($letters);
            $str = str_ireplace($keys,$values,$str);
        }
    }

    return $str;
}

function replaceUncommon($str){
    $letters = array (
        'tch' => '%E1%83%AD',
        'ch' => '%E1%83%A9',
        'sh' => '%E1%83%A8',
        'ts' => '%E1%83%AC',
        'gh' => '%E1%83%A6',
        'kh' => '%E1%83%AE',
        'zh' => '%E1%83%9F',
        'dz' => '%E1%83%AB',
        '%E1%83%A%E1%83%A9' => '%E1%83%AC'
    );

    $keys = array_keys($letters);
    $values = array_values($letters);
    return str_ireplace($keys,$values,$str);
}

function replaceCommon($str){
    $letters = array (
        ' ' => '%20',
        'a' => '%E1%83%90',
        'b' => '%E1%83%91',
        'g' => '%E1%83%92',
        'd' => '%E1%83%93',
        'e' => '%E1%83%94',
        'v' => '%E1%83%95',
        'z' => '%E1%83%96',
        'T' => '%E1%83%97',
        'i' => '%E1%83%98',
        'k' => '%E1%83%99',
        'l' => '%E1%83%9A',
        'm' => '%E1%83%9B',
        'n' => '%E1%83%9C',
        'o' => '%E1%83%9D',
        'p' => '%E1%83%9E',
        'J' => '%E1%83%9F',
        'r' => '%E1%83%A0',
        's' => '%E1%83%A1',
        't' => '%E1%83%A2',
        'u' => '%E1%83%A3',
        'f' => '%E1%83%A4',
        'q' => '%E1%83%A5',
        'R' => '%E1%83%A6',
        'y' => '%E1%83%A7',
        'S' => '%E1%83%A8',
        'C' => '%E1%83%A9',
        'c' => '%E1%83%AA',
        'Z' => '%E1%83%AB',
        'w' => '%E1%83%AC',
        'W' => '%E1%83%AD',
        'x' => '%E1%83%AE',
        'j' => '%E1%83%AF',
        'h' => '%E1%83%B0'
    );

    $keys = array_keys($letters);
    $values = array_values($letters);
    return str_replace($keys,$values,$str);
}

function replaceMistakes($str){
    $letters = array (

        '%E1%83%A%E1%83%A9' => '%E1%83%AC',
        '%E1%83%9%E1%83%A9' => '%E1%83%9C'
    );

    $keys = array_keys($letters);
    $values = array_values($letters);
    return str_ireplace($keys,$values,$str);
}

$str = replaceVowels($str);
$str = replaceUncommon($str);
$str = replaceCommon($str);
$str = replaceMistakes($str);

echo "<meta http-equiv='refresh'" .
     " content='0;url=https://translate.google.com/#ka/en/". $str ."'>";