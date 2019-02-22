<?php

// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

/**
 * - Visa ett formulär för att anmäla sig till festen
*/
?>

<h2>Anmäl dig till festen</h2>

<form action="save_signup.php" method="POST">
	<div class="form-group">
		<label for="fullname">Namn</label>
		<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Ange ditt namn">
	</div>

	<div class="form-group">
		<label for="email">E-post</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="Ange din e-post-adress">
	</div>

	<div class="form-group">
		<label for="phone">Telefonnummer</label>
		<input type="tel" class="form-control" id="phone" name="phone" placeholder="Ange ditt telefonnummer">
	</div>

	<button type="submit" class="btn btn-primary">YAY!</button>
</form>

<?php

// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
