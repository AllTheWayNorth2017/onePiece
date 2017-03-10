<?php

spl_autoload_register(function ($classname) {
    // autoload a 0. l 
	$space = explode("\\", $classname);
    // var_dump($space);
    $filePath = '';
    foreach ($space as  $value) {
        $filePath .= '/'.$value;
    }
    $filePath = $filePath.".class.php";
    $filePath = ltrim($filePath, '/');
    if (file_exists($filePath)) {
        require $filePath;
    }
});
