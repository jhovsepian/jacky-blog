<?php
// we want to access our path file in our config to link to the proper controller.
	require_once (__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
	<div>
	<!-- this is for the user to input their username -->
		<label for="username">Username: </label>
		<input type="text" name="username" /> 
	</div>

	<div>
	<!-- this is for the user to input their password  -->
	<!-- the input type "password" so its private. It wont show the words. -->
		<label for="password">Password: </label>
		<input type="password" name="password" />
	</div>

	<div>
	<!-- this is a submit button -->
		<button type="submit">Submit</button>
	</div>
</form>