<?php
	session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '179508382883634',
		'app_secret' => 'c73ddaa44eba2e2c4845816d4fa32037',
		'default_graph_version' => 'v3.0'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>