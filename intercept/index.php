<?php
switch ($current) {
	case LIVE:
		header("Location: //". STAGING ."/");
		break;
	case STAGING:
		if (isset($_POST['password']) && $_POST['password'] === PASSWORD) {
			$_SESSION['authorized'] = true;
			return;
		} else {
			$_SESSION['authorized'] = false;
			require 'index.html';
			exit();
		}
		break;
	default:
		return;
}