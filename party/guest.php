<?php

require("core/init.php");

?>

<h1>Paaaartty!</h1>

<h2>Info om enskild gäst</h2>
<ol>
<?php
	$guestsController = new GuestsController($dbh);

	$guest = $guestsController->getGuest($_GET['id']);
	echo "Namn: {$guest->getName()}<br>";
	echo "Email: {$guest->getEmail()}<br>";
	echo "<p><a href='index.php'>Tillbaka</a></p>";
?>
</ol>
