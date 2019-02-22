<?php

require("core/bootstrap.php");
require("templates/header.php");

$guestController = new GuestController();
$res = $guestController->createGuest($_POST['fullname'], $_POST['email'], $_POST['phone']);

?>

<?php
	if ($res) {
		?>
			<h1>Tack för din anmälan! 🕺🏻</h1>
		<?php
	} else {
		?>
			<h1>Oooops, något gick fel 😅</h1>
		<?php
	}
?>

<a href="index.php">&laquo; Tillbaka</a>

<?php
require("templates/footer.php");
