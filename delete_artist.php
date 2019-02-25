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

$albums = Album::where('artist_id', $artist->id)->get();
if (count($albums) > 0) {
	$delete = false;
} else {
	$delete = true;
}

if ($delete) {
	$artist->delete();
}

?>

<?php if ($delete) { ?>
	<div class="alert alert-success" role="alert">
		Artisten <em><?php echo $artist->name; ?></em> raderad! 😵
	</div>
<?php } else { ?>
	<div class="alert alert-warning" role="alert">
		Artisten <em><?php echo $artist->name; ?></em> kunde inte raderas för den hade album kopplade till sig! 🙀
	</div>
<?php } ?>

<a href="index.php">&laquo; Tillbaka</a>

<?php

// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
