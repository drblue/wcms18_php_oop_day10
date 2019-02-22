<?php

// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

/**
 * - Hämta ut info om artisten och alla hens album
 * - För varje album, skriv ut albumets namn och ha en länk till albumets sida
 * - (Länk för att skapa ett nytt album för den här artisten)
*/

use \App\Controllers\ArtistController;
use \App\Controllers\AlbumController;

$artistController = new ArtistController($dbh);
$artist = $artistController->getArtist($_REQUEST['artist_id']);

$albumController = new AlbumController($dbh);
$albums = $albumController->getAlbumsForArtist($_REQUEST['artist_id']);

?>

<h2><?php echo $artist->getName(); ?></h2>
<p>Birthday: <?php echo $artist->getBirthday(); ?></p>

<h3>Album</h3>
<ol>
	<?php
		foreach ($albums as $album) {
			?>
				<li>
					<a href="album.php?album_id=<?php echo $album->getId(); ?>">
						<?php echo $album->getName(); ?>
						(<?php echo $album->getGenre(); ?>)
					</a>
				</li>
			<?php
		}
	?>
</ol>

<a href="index.php">&laquo; Tillbaka</a>

<?php

// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
