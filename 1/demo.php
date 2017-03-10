<?php 
// define('__EXT__', strtolower(pathinfo($_SERVER['PATH_INFO'],PATHINFO_EXTENSION)));
// $depr = '/';
// $regx   =   preg_replace('/\.'.__EXT__.'$/i','',trim($_SERVER['PATH_INFO'],$depr));
// var_dump(pathinfo($_SERVER['PATH_INFO'],PATHINFO_EXTENSION));
// var_dump(__EXT__);
// var_dump($regx);
class caculate {
	public function jiaFa($a, $b) {
		return $a+$b;
	}

	public function chuFa($a, $b) {
		return $a / $b;
	}

	public function chengFa($a, $b) {
		return $a * $b;
	}

	public function jianFa($a, $b) {
		return $a / $b;
	}

	public function double($a) {
		return $a * 2;
	}
}
$PATH_INFO = ltrim($_SERVER['PATH_INFO'], '/');

$name = explode('/',$PATH_INFO);
$para = $_POST;
echo call_user_func_array($name, $para);