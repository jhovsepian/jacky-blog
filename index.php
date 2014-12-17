<?php
// made new views
// added header and footer to blog
// added new navigation view
	require_once (__DIR__ . "/controller/login-verify.php");
	require_once (__DIR__ . "/view/header.php");
	if (authenticateUser()) {
	require_once (__DIR__ . "/view/navigation.php");
	}
	require_once (__DIR__ . "/controller/create-db.php");
	
	require_once (__DIR__ . "/controller/read-posts.php");
	require_once (__DIR__ . "/view/footer.php");
?>

