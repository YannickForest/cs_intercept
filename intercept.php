<?php
// set up your variables here
define('ENV_MODE', 'dev'); // set to 'dev' to enable access control
define('PASSWORD', 'password'); // set to the actual password you want to use 
define('LIVE', 'careers.company.com'); // set to the final sub/domain used by the live instance
define('STAGING', 'staging.company.com'); // set to the domain used by the staging instance

// branching
$auth = $_SESSION['authorized'] || false;
$mode = ENV_MODE;
session_start();
$current = $_SERVER['HTTP_HOST'];
switch($current) {
	case LIVE :
		if ($mode === 'dev') require 'intercept/index.php';
	case STAGING :
		if (!$auth) require 'intercept/index.php';
		break;
	default:
		break;
}