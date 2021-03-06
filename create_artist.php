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

if (isset($_POST['name'])) {
	$artist = Artist::create([
		'name' => $_POST['name'],
		'birthday' => isset($_POST['birthday']) ? $_POST['birthday'] : null
	]);

	echo "<strong>Ny artist skapad 🕺🏻!</strong>";
	echo "<a href='artist.php?artist_id={$artist->id}'>Till artisten &raquo;</a>";
}

?>

<h2>Skapa artist</h2>

<form method="POST">

	<div class="form-group">
		Namn: <input type="text" name="name" placeholder="Artistens namn" class="form-control">
	</div>

	<div class="form-group">
		Födelsedatum:
		<input type="text" name="birthday" placeholder="Artistens födelsedatum" class="form-control">
	</div>

	<div class="form-group">
		<input type="submit" value="Skapa artist" class="btn btn-success">
	</div>

</form>

<a href="index.php">&laquo; Tillbaka</a>

<?php

// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
