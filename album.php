<?php

// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

/**
 * - Hämta ut info om albumet och alla albumets låtar
 * - För varje låt, skriv ut låtens namn och längd
 * - (Länk för att skapa en ny låt för det här albumet)
*/

use \App\Controllers\AlbumController;
use \App\Controllers\ArtistController;
use \App\Controllers\TrackController;

// Skapa alla controllers vi behöver
$albumController = new AlbumController($dbh);
$artistController = new ArtistController($dbh);
$trackController = new TrackController($dbh);

// Hämta ut info om just detta albumet
$album = $albumController->getAlbum($_REQUEST['album_id']);

// Hämta ut albumets artist_id
$artist_id = $album->getArtistId();
$artist = $artistController->getArtist($artist_id);

// Hämta ut alla låtar för detta albumet
$tracks = $trackController->getTracksForAlbum($_REQUEST['album_id']);

?>

<h1><?php echo $artist->getName(); ?></h1>
<h2>Album: <?php echo $album->getName(); ?></h2>
<p>Genre: <?php echo $album->getGenre(); ?></p>

<h3>Låtar</h3>
<ol>
	<?php
		foreach ($tracks as $track) {
			?>
				<li>
					<?php echo $track->getName(); ?>
					(<?php echo $track->getLength(); ?>)
				</li>
			<?php
		}
	?>
</ol>

<a href="artist.php?artist_id=<?php echo $artist->getId(); ?>">&laquo; Tillbaka till artisten</a>

<?php

// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
