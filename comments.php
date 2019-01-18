<?php
include_once 'header.php';

?>

<h1> Leave Comment Please</h1>
<div class="wrapper">

<form class="signup-form" action="includes/discom.inc.php" method="POST">

	<input type="text" name="username" placeholder="Username">
	<input type="text" name="subject" placeholder="Subject">
	<textarea name="comments" type="textarea" placeholder="Comments"></textarea>
	<button type="submit" name="submit">Submit</button>
	
</form>

</div>

