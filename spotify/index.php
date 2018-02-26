<?php

require("core/init.php");
require("templates/header.php");

$artistController = new ArtistController($dbh);
$artists = $artistController->getArtists();

$albumController = new AlbumController($dbh);
$albums = $albumController->getAlbums();

?>
<h1>Artists</h1>

<?php
	foreach ($artists as $artist) {
		echo "<li>{$artist->getName()} (ID: {$artist->getId()})</li>";
	}
?>

<h1>Albums</h1>

<ul>
	<?php
		foreach ($albums as $album) {
			echo "<li>{$album->getName()} (ID: {$album->getId()})</li>";
		}
	?>
</ul>

<?php
require("templates/footer.php");
