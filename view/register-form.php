<?php
	require_once (__DIR__ . "/../model/config.php");
?>
<!-- title -->
<h1>Register</h1>
<!-- we linked create user to our form -->
<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<div>
	<!-- this label is for the email. -->
		<label for"email">Email: </label>
		<input type="text" name="email" />
	</div>

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