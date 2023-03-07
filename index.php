<?php
require_once 'data.php';
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption:regular,700" rel="stylesheet" />
	<link href="assets/styles/main.css" rel="stylesheet" />
	<script src="/assets/scripts/main.js" defer></script>
	<title>testovoe-rocket-business</title>
</head>

<body>
	<div class="wrapper">
		<?php require_once 'partials/header.php'; ?>

		<main class="wrapper__main">
			<?php require_once 'partials/hero.php'; ?>
			<?php require_once 'partials/check-up.php'; ?>
		</main>

		<?php require_once 'partials/footer.php'; ?>
	</div>

	<?php require_once 'partials/мake-an-appointment.php'; ?>


	<?php require_once 'partials/sprite.php'; ?>
</body>

</html>