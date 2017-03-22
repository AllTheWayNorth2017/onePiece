<?php

$string = "aaaabaaab";
$pattern = '\(.)\1{3}\s';
preg_match($pattern, $string, $result);
print_r($result);