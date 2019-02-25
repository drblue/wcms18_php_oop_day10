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

use \App\Models\Album;
use \App\Models\Artist;
use \App\Models\Track;

// Hämta ut info om just detta albumet
$album = Album::find($_REQUEST['album_id']);

// Hämta ut albumets artist_id
$artist = $album->artist;

// Hämta ut alla låtar för detta albumet
$tracks = $album->tracks;

?>

<h1><?php echo $artist->name; ?></h1>
<h2>Album: <?php echo $album->name; ?></h2>
<p>Genre: <?php echo $album->genre; ?></p>

<h3>Låtar</h3>
<ol>
	<?php
		foreach ($tracks as $track) {
			?>
				<li>
					<?php echo $track->name; ?>
					(<?php echo $track->length; ?>)
					<?php
						if ($track->video_url) {
							?>
								<a href="<?php echo $track->video_url; ?>" target="_blank">🎬</a>
							<?php
						}
					?>
				</li>
			<?php
		}
	?>
</ol>

<a href="artist.php?artist_id=<?php echo $artist->id; ?>">&laquo; Tillbaka till artisten</a>

<?php

// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
