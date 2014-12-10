<?php
	require_once (__DIR__ . "/../model/config.php");
?>
<center>
<!-- This created a blog post that i can submit into my phpmyadmin. -->
<!-- I can write whatever i want and submit it -->
<h1>BlogBot</h1>
<!-- to echo out the title and the post -->
<!-- this is to submit whatever i wrote into my controller/ create post -->
<img src="http://media0.giphy.com/media/3E91xhKcM98nm/giphy.gif" alt="Robot" width="200" height="200">
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
	</center>
</form>