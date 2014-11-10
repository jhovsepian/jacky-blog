<?php
	require_once (__DIR__ . "/../model/config.php");
?>

<!-- This created a blog post that i can submit into my phpmyadmin. -->
<!-- I can write whatever i want and submit it -->
<h1>Create Blog Post</h1>
<!-- to echo out the title and the post -->
<!-- this is to submit whatever i wrote into my controller/ create post -->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<div>
		<label for="title">Title: </label>
		<input type="text" name="title" />
	</div>

	<div>
		<label for="post">Post: </label>
		<textarea name="post"></textarea>
	</div>

	<div>
		<button type="Submit">Submit</button>
	</div>
</form>