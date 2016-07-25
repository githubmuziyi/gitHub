<?php
	$url = 'http://106.75.28.160/UCloud.txt';
	$str = file_get_contents($url);
	$pattern = '/(UCanUup)/';
	preg_match_all($pattern, $str, $matches);
	$count = sizeof(next($matches));
	echo $count;
	//print_r($matches);
