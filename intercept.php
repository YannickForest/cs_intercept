<?php
// set up your variables here
define('ENV_MODE', 'dev'); // set to 'dev' to enable access control
define('PASSWORD', 'password'); // set to the actual password you want to use 
define('LIVE', 'live.careersite.com'); // set to the final sub/domain used by the live instance
define('STAGING', 'staging.careersite.com'); // set to the domain used by the staging instance

// branching
$current = $_SERVER['HTTP_HOST'];
session_start();
if (	($current == LIVE || $current == STAGING)
			&& ENV_MODE === 'dev'
			&& !$_SESSION['authorized']
		) {
	require 'intercept/index.php';
}