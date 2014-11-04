<?php
// below is to access the config file
require_once (__DIR__ . "/../model/config.php");
?>
<nav>
	<ul>
<!-- this path is to access the post.php -->
<!-- the echo path echos out the contents of an existing variable -->
		<li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
	</ul>
</nav>