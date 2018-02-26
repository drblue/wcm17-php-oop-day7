<?php

require("core/init.php");
require("templates/header.php");

?>

<h1>Paaaartty!</h1>

<h2>Anmäl dig som gäst</h2>

<form method="POST" action="save_signup.php">
	<div>
		<input type="text" name="firstname" placeholder="First name" required />
		<input type="text" name="lastname" placeholder="Last name" required />
	</div>
	<div>
		<input type="email" name="email" placeholder="Email" required />
	</div>
	<div>
		<input type="submit" value="Skicka anmälan" class="btn btn-primary" />
	</div>
</form>

<a href="index.php">Tillbaka</a>

<?php
require("templates/footer.php");
