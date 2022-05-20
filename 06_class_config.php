<?php

// What patterns do you see?
// Does PHP have JSON support?
// How can the content be broken into client- and server-side pieces?
// How can we do a fallback, such that the web application will run gracefully even if the server does not respond?
// Do we need to alert the user if the server does not respond?

ini_set('display_errors', 1);
header('Content-Type: text/plain');
$config = [
	0 => [
		0 => "Refer to Adult Leaming Center CTP Coordinator at NCC",
		2 => "ENGL090 College Transition Program(CTP)",
		4 => "Refer to English Program Coordinator"
	],

	237 => [
		0 => "Refer to English Program Coordinator",
		3 => "ENGL101N w/Co-Requisite Workshop",
		5 => "Refer to English Program Coordinator"
	],

	250 => [
		0 => "Refer to English Program Coordinator",
		4 => "ENGL101N"
	],
	263 => [
		0 => "Refer to English Program Coordinator",
		5 => "ENGL 101N",
		6 => "ENGL101N or ENGL110N**"
	]

];
//var_dump($config);
echo json_encode($config);
file_put_contents('json', json_encode($config));
//var_export($config);
//file_put_contents('config','<?php'.PHP_EOL.'$config2 = '.var_export($config,true).'');
//include 'config';
$json = file_get_contents('json');
$config2 = json_decode($json, true);
var_dump($config2);