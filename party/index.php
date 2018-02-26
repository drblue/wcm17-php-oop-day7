<?php

require("core/init.php");
require("templates/header.php");

?>

<h1>Paaaartty!</h1>

<h2>Anmälda gäster</h2>
<ol>
<?php
	$guestsController = new GuestsController($dbh);

	$guests = $guestsController->getGuests();
	foreach ($guests as $guest) {
		echo "<li><a href='guest.php?id={$guest->getId()}'>{$guest->getName()}</a></li>";
	}
?>
</ol>

<a href="signup.php">Anmäl dig till festen</a>

<?php
require("templates/footer.php");
