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

use \App\Models\Artist;
use \App\Models\Album;

$artist = Artist::find($_REQUEST['artist_id']);

?>

<h2><?php echo $artist->name; ?></h2>
<p>Birthday: <?php echo $artist->birthday; ?></p>

<h3>Album</h3>
<ol>
	<?php
		foreach ($artist->albums as $album) {
			?>
				<li>
					<a href="album.php?album_id=<?php echo $album->id; ?>">
						<?php echo $album->name; ?>
						(<?php echo $album->genre; ?>)
					</a>
				</li>
			<?php
		}
	?>
</ol>

<p>
	<a href="delete_artist.php?artist_id=<?php echo $artist->id; ?>" class="btn btn-danger">Radera artist</a>
</p>

<a href="index.php">&laquo; Tillbaka</a>

<?php

// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
